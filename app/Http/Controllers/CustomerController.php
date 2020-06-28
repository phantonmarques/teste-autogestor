<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Category;
use App\State;
use App\Http\Requests\CreateUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $paginate = 10;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customerSearch = $request->query('s');

        if (!empty($customerSearch))
            $customers = Customer::whereLike(['name', 'email', 'cpf_cnpj', 'created_at', 'updated_at'], $customerSearch)
                ->orWhereHas('city', function ($q) use ($customerSearch) {
                    $q->where('name_visible', 'LIKE', "%{$customerSearch}%");})
                ->orWhereHas('city.state', function ($q) use ($customerSearch) {
                    $q->where('name_visible', 'LIKE', "%{$customerSearch}%");})
                ->orWhereHas('category', function ($q) use ($customerSearch) {
                    $q->where('name', 'LIKE', "%{$customerSearch}%");})
                ->paginate($this->paginate);
        else
            $customers = Customer::paginate($this->paginate);
            # SELECT * FROM customers LIMIT 10 OFFSET 0;

        return view('admin.customer.index', compact('customers', 'customerSearch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id', 'name')->get();

        $states = State::select('id', 'name_visible')->get();

        $customer = new Customer();

        return view('admin.customer.form', compact('categories', 'customer', 'states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUser $request)
    {
        $data = $request->validated();

        DB::beginTransaction();

        try {
            $customer = Customer::create($data);

            if (!$customer->exists)
                throw new \Exception('Não foi possível criar o cliente!');

            DB::commit();

            return redirect()
                ->route('customer.index')
                ->with('success', 'Cliente criado com sucesso!');
        } catch (\Exception $e) {
            DB::rollBack();;

            return redirect()
                ->route('customer.create')
                ->withInput()
                ->with('error', $e->getMessage());
        }
    }
}
