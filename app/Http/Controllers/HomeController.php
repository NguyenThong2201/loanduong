<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;
use Session;

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

    public function detail($titleSale){
        $productDetail = Product::where('active', '=', 1)
            ->where('title_sale', '=', $titleSale)
            ->first();
        $imgDetail = DB::table('images')
            ->select('img_name')
            ->where('product_id', '=', $productDetail->product_id)
            ->get();
        $productByCategory = DB::table('products')
            ->select('*')
            ->where('category_id', '=', $productDetail->category_id)
            ->get();
        if ($productDetail == NULL) {
            abort(404);
        }
        return view('home.detail', compact('productDetail', 'imgDetail', 'productByCategory'));
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
