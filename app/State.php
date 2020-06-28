<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'state';

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
        'state_cod'
    ];

    /**
     * Get state of user.
     */
    public function city()
    {
        return $this->hasOne (City::class);
    }
}
