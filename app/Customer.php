<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function sid()
    {
    	return $this->hasMany('App\Product');
    }
    protected $fillable = [
    	'name',
        'company',
    	'email',
    	'address',
    	'phone',
    ];
}