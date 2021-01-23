<?php

namespace Cchivhima\Sendfood\Http\Controllers;

use Illuminate\Http\Request;

use Cchivhima\Sendfood\Http\Drivers\Cart;

use Session;

use DB;

use Cchivhima\Sendfood\Models\Hamper;

class PurchaseController extends Controller
{
    /**
     * Show Items added into the cart
     */
    public function cart()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        //dd($cart);
        return view('sendfood::Plugins.Purchase.cart')->with([
            'cart'=>$cart
        ]);
    }

    /** hamper adding to cart **/

    /**
     * Buyer adds hamper into the cart
    */
    public function addtocart(Request $request,$id){
        $hamper = Hamper::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($hamper,$hamper->id);
        //dd($hamper);
        $request->session()->put('cart',$cart);
        //dd($cart);
        //return redirect()->route('shop');
    }

    /**
     * reduce hamper added to the cart
    */
    public function reduceProductByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        Session::put('cart',$cart);
    }

     /**
      * remove hamper added
     */
    public function removeItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        //dd($cart);
        if ($cart) {
         Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }
    }

    /**
     * Selected products
     * cart
     */

       public function getCartProducts()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return response()->json($cart,200);
   } 


   /** hamper adding to cart **/

}
