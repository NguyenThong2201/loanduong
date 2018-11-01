<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Slide;
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
        $slide = Slide::where('active', '=', 1)->paginate(3);
        return view('home.home', compact('products', 'productsWoment', 'productsMen', 'productsKids', 'slide'));
    }

    public function detail($titleSale){
        $productDetail = Product::where('active', '=', 1)
            ->where('title_sale', '=', $titleSale)
            ->first();
        if ($productDetail == NULL) {
            abort(404);
        }
        $imgDetail = DB::table('images')
            ->select('*')
            ->where('product_id', '=', $productDetail->product_id)
            ->get();
        $productByCategory = DB::table('products')
            ->select('*')
            ->where('category_id', '=', $productDetail->category_id)
            ->get();
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

    public function category($titleSale){
        if ($titleSale == 1 || $titleSale == 2) {
            $productByCategory = DB::table('products')
            ->select('*')
            ->where('sex', '=', $titleSale)->get();
        }else{
            $category = DB::table('category')
            ->select('category_id')
            ->where('title_sale', '=', $titleSale)->first();
            if ($category == NULL) {
                abort(404);
            }
            $categoryId = $category->category_id;
            $productByCategory = DB::table('products')
                ->select('*')
                ->where('category_id', '=', $categoryId)->get();
        }
        return view('home.category', compact('productByCategory'));
    }

    public function Contacts(){
        return view('home.contacts');
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('home');  
    }
}
