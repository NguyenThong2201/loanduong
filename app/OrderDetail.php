<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "order_detail";
    public function products(){
    	return $this->belongsTo('App\Products','product_id','order_detail_id');
    }
    public function orders(){
    	return $this->belongsTo('App\Orders','order_id','order_detail_id');
    }
}