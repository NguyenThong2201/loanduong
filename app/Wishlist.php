<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = "wishlist";
    public function bill(){
        return $this->hasMany('App\Product','wishlist_id','product_id');
    }
}