<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = "wishlist";
    public function product(){
        return $this->hasMany('App\Product','wishlist_id','product_id');
    }
}