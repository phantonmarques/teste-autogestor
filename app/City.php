<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'city';

    /**
     * @var array $hidden
     */
    protected $hidden = ['created_at', 'updated_at'];

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'name',
        'name_visible',
        'ddd_city',
        'state_id'
    ];

    /**
     * Get citys of user.
     */
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id', 'id');
    }
}
