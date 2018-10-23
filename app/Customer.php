<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = "customer";
	public function bill(){
    	return $this->hasMany('App\Orders','customer_id','product_id');
    }  
}