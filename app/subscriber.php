<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subscriber extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_name', 'company_special', 'country', 
        'address', 'postcode', 'email', 'contact', 'message',
    ];
}
