<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function addCartAjax(Request $request){
        $productId = $_GET['product_id'];
        $quantity  = $_GET['quantity'];
        $cartNew['list_product'] = [];
        if (empty($productId) == FALSE){
            $cartNew['quantity'] = 0;
            $productOrder = DB::table('products')
                ->select('*')->where('product_id', '=', $productId)->first();
            $cartSession = $request->session()->has('cartNew') ? $request->session()->get('cartNew') : NULL;
            if ($cartSession){
                foreach ($cartSession as $item){
                    $cartNew['quantity'] += $quantity;
                    $cartNew['price'] = $productOrder->promotion_price * $cartNew['quantity'];
                    $cartNew['list_product'][] = $productOrder;
                }
            }
            $request->session()->put('cartNew', $cartNew);
        }
        return $cartNew['quantity'];
    }
}
?>