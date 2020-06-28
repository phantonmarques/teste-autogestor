<?php

namespace App\Http\Controllers;

use App\City;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    /**
     * Show information company AutoGestor consuming API across CURL PHP
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function info()
    {
        # Utilizado como exemplo o CNPJ do AutoGestor, busquei no google.
        $cnpj = '17358527000195';

        # Começo do curl, utilizei o padrão utilizado em PHP PURO, sem utilizar biblioteca, já utilizei a "Ixudra\Curl\Facades\Curl" em laravel.
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://www.receitaws.com.br/v1/cnpj/' . $cnpj,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        # Retorno do REQUEST
        $response = curl_exec($curl);
        $erro = curl_error($curl);
        curl_close($curl);

        if ($erro) # Erro não continua executando e não retorna para view
            dd('Ocorreu algum erro não previsto ao utilizar o CURL do PHP');
        else # Retorno 200|201
            $response = json_decode($response);

        # Método realizado o CURL
        $method = __METHOD__;

        return view('admin.information',
            compact('method','response'));
    }

    /**
     * Function Search citys of certain state
     * @param $stateSelect
     * @return \Illuminate\Http\JsonResponse
     */
    public function searchCitys($stateSelect)
    {
        return response()->json(City::where('state_id', $stateSelect)->select( 'id', 'name', 'name_visible')->get());
    }
}
