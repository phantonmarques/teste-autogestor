<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'name',
        'email',
        'cpf_cnpj',
        'city_id',
        'category_id'
    ];

    /**
     * Get the category record associated with the customer.
     */
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    /**
     * Get the city record associated with the customer.
     */
    public function city()
    {
        return $this->belongsTo(City::class,'city_id');
    }

}
