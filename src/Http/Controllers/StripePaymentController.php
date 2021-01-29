<?php

namespace Cchivhima\Sendfood\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use Stripe;

use Cchivhima\Sendfood\Models\Hamper;

use Cchivhima\Sendfood\Models\Order;

use Cchivhima\Sendfood\Models\Item;

use Cchivhima\Sendfood\Models\Drink;

use Cchivhima\Sendfood\Http\Drivers\Cart;

use Laravel\Cashier\Cashier;

use App\Models\User;

use Illuminate\Support\Facades\Auth;


class StripePaymentController extends Controller
{

    public $user;
    public function __construct() {
        Stripe\Stripe::setApiKey('sk_test_51H9qTECmoUmjZivffN9vpQY2Jlj1388UY1MgpW8Bs4EJxDVR7EsVoW9kNwYn0wnkRQIiDjqUIT5iq0FDTwdaX7R300zT50QHkU');
       // Auth::user()= Auth::user();
    }

    /**
     * Render Pay with Stripe Front-end
     * 
     */
    public function payWithStripe()
    {
        if (!Session::get('cart')->totalQty==0 && !Session::get('receivingmethod')==null && !Session::get('beneficiaryid')==null && !Session::get('selectpaymentmethod')==null && !Session::get('beneficiaryid')==null && !Session::get('selectpaymentmethod')==null && Session::get('selectpaymentmethod')['id']==4 )
         {
           $stripeCustomer = Auth::user()->createOrGetStripeCustomer();
           //dd($stripeCustomer);
           return view('sendfood::Plugins.payment.paywithstripe')->with([
            'intent' => Auth::user()->createSetupIntent()
           ]);
         }else{

            return redirect()->back()->with(['error'=>'Please Select Payment Method']);
            Session::save();

        }

    }

    /**
     * Execute Stripe Payment
     * 
     */
    public function makeStripePayment(Request $request)
    { //
  
        //dd($request->stripeToken);
        if (Auth::user()->hasPaymentMethod()) {

          //Auth::user()->updateDefaultPaymentMethod($request->payment_method);

        }else{

          //Auth::user()->addPaymentMethod($request->payment_method);

        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

  
          $stripe = new \Stripe\StripeClient('sk_test_CGRx5bP7BUmqhrV8uJ2RDF09');
          
          $description = null;

          $charge = $stripe->charges->create([
            'amount' => $cart->totalPrice,
            'currency' => Session::get('currency'),
            'source' => $request->stripeToken,
            'description' => 'Purchase  of ' .  $cart->totalQty .  ' items from Zipremitcoin worth ' . $cart->totalPrice . Session::get('currency')   . ' Thank you For Shopping with Us!',
          ]);

          if ($charge->status=="succeeded") {
            $order = new Order();
            $order->order = serialize($cart);
            $order->user_id = Auth::id();
            $order->charge_id = $charge->id;
            $order->beneficiary_id = Session::get('beneficiaryid');
            $order->beneficiarie_receiving_method_id = Session::get('receivingmethod');
            $order->save();
            return redirect(route('hampers'))->with(['success'=>'Payment Completed Successfully']);
            Session::forget('cart');
            Session::forget('beneficiaryid');
            Session::forget('receivingmethod');
            Session::forget('selectpaymentmethod');
            Session::save();
          }else{
            return back()->with(['error'=>'Payment failed please try again']);
            Session::save();
          }

    
    }

    public function stripeBillingPortal(Request $request){
        return $request->user()->redirectToBillingPortal();
    }

    public function generateDescription(){

      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);

      $humperorderdescription = 'Hampers: ';
      $itemorderdescription = 'Items: ';
      $drinkorderdescription = 'Drinks: ';
      dd($cart);
        foreach ($cart as $key=>$items) {
          if (is_array($items) || is_object($items))
          {
           foreach ($items as $key=>$item) {
             print_r($item['real_category']);
               if ($item['real_category']==1) {

                   $hamper = Hamper::find($item['real_id']);

                   $humperorderdescription  .= $hamper->name . ',';

                   //$hamperitems = Hamper::with('hamperItems')->where('id',$items[$i]['real_id'])->get(); 
                   //dd($hamperitems);
                   //return response()->json(200,$hamperitems);

               } else if ($item['real_category']==2){

                   $item = Item::find($item['real_id']);

                   $itemorderdescription  .= $item->description . ',';

               }else if ($item['real_category']==3){

                   $drink = Drink::find($item['real_id']);
                      
                   $itemorderdescription  .= $drink->type . ',';
                
               }


    
           }
          }
        }
     //print_r($humperorderdescription . ' ' . $itemorderdescription . ' ' . $drinkorderdescription );
    }

}
