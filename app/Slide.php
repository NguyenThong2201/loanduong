<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = "slide";
    public function bill(){
        return $this->hasMany('App\Product','wishlist_id','product_id');
    }
}