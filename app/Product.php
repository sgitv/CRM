<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = [
   		'name',
   		'customer_id',
   		'price',
   		'category',
   ]; 
}