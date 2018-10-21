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
            //$request->session()->forget('cartNew');
            if ($cartSession){
                print_r($cartSession);die;
                $cartNew['quantity'] = $cartSession['quantity'] + $quantity;
                $cartNew['price']    = $productOrder->promotion_price * $cartNew['quantity'];
                if (array_key_exists($productId,$cartSession['list_product'])) {
                   $request->session()->forget('cartNew');
                }
                //array_push($cartSession['list_product'], $productOrder);
                $cartSession['list_product'][$productId] = $productOrder;
                $cartNew['list_product'][$productId] = $cartSession['list_product'][$productId];
            }else{
                $cartNew['quantity'] = $quantity;
                $cartNew['price']    = $productOrder->promotion_price * $quantity;
                $cartNew['list_product'][$productId] = $productOrder; 
            }
            $request->session()->put('cartNew', $cartNew);
        }
        return $cartNew['quantity'];
    }
}
?>