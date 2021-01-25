<?php

namespace Cchivhima\Sendfood\Http\Controllers;

use Illuminate\Http\Request;

use Cchivhima\Sendfood\Http\Drivers\Cart;

use Session;

use DB;

use Cchivhima\Sendfood\Models\Hamper;

use Cchivhima\Sendfood\Models\Item;

use Cchivhima\Sendfood\Models\Drink;

class PurchaseController extends Controller
{

    public $newcartproduct;
    /**
     * Show Items added into the cart
     */
    public function cart()
    {
        if (!Session::get('cart')->totalQty==0) {
            //dd(Session::get('cart')->totalQty==0);
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            //dd($cart);
            return view('sendfood::Plugins.Purchase.cart')->with([
                'cart'=>$cart
            ]);
        }else{
            return redirect()->back()->with(['warning'=>'Your Cart is Empty Please Add Some Products To Proceed!']);
        }

    }

    /** hamper adding to cart **/

    /**
     * Buyer adds hamper into the cart
    */
    public function addtocart(Request $request,$id){
        //dd($request);
        if ($request->category==1) {
            $this->newcartproduct = Hamper::find($id);
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->add($this->newcartproduct,$this->newcartproduct->id,$request->category);
            $request->session()->put('cart',$cart);
        }
        elseif($request->category==2){
            $this->newcartproduct = Item::find($id);
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->add($this->newcartproduct,$this->newcartproduct->id,$request->category);
            $request->session()->put('cart',$cart);
        }
        elseif ($request->category==3) {
            $this->newcartproduct = Drink::find($id);
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->add($this->newcartproduct,$this->newcartproduct->id,$request->category);
            $request->session()->put('cart',$cart);
        }

    }

    /**
     * reduce hamper added to the cart
    */
    public function reduceProductByOne(Request $request ,$id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id,$request->category);
        Session::put('cart',$cart);
    }

     /**
      * remove hamper added
     */
    public function removeCartProduct(Request $request ,$id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id,$request->category);
        //dd($cart);
        if ($cart) {
         Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }
    }

     /**
      * Add more Products
     */
    public function addMoreCartProduct(Request $request,$id){
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
