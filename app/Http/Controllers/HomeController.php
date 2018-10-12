<?php

namespace App\Http\Controllers;

use App\Images;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('active', '=', 1)->paginate(12);
        $productsWoment = Product::where('active', '=', 1)
        ->where('sex', '=', 1)
        ->orWhere('sex', '=', 3)->get();
        $productsMen = Product::where('active', '=', 1)
        ->where('sex', '=', 2)
        ->orWhere('sex', '=', 3)->get();
        $productsKids = Product::where('active', '=', 1)
        ->where('sex', '=', 0)->get();
        return view('home.home', compact('products', 'productsWoment', 'productsMen', 'productsKids'));
    }

    public function getDetail(){

    }
    public function getDetailAjax(){
        $productId = $_GET['product_id'];
        $allProductDetail = [];
        $productDetail = DB::table('products')
            ->select('*')->where('product_id', '=', $productId)->first();
        $imgProducts   = DB::table('images')
            ->select('img_name', 'img_id')
            ->where('product_id', '=', $productId)
            ->get();
        $allProductDetail['product'] = $productDetail;
        $allProductDetail['listImg'] = $imgProducts;
        return json_encode($allProductDetail);
    }
}
