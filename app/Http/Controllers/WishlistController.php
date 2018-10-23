<?php
namespace App\Http\Controllers;
use App\Category;
use App\Custom;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getListWishList(){
        $userId = Auth::user()->id;
        $wishList = DB::table('wishlist')
            ->select('*')
            ->where('user_id', '=', $userId)
            ->get();
        foreach ($wishList as $items){
            $items->products = DB::table('products')
                ->select('*')
                ->where('product_id', '=', $items->product_id)
                ->first();
        }
        return view('home.wishlist', compact('wishList'));
    }
    public function addWishlistAjax(){
        $productId = $_GET['product_id'];
        $userId    = Auth::user()->id;
        if (empty($userId) == TRUE) {
            return redirect('/login');
        }
        $wishList  = new Wishlist;
        $wishList->product_id = $productId;
        $wishList->user_id = $userId;
        $wishList->save();
        return $productId;
    }
}