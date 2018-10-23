<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = "orders";
    public function order_detail(){
    	return $this->hasMany('App\OrderDetail','order_id','order_id');
    }
    public function orders(){
    	return $this->belongsTo('App\Customer','customer_id','order_id');
    }
}
