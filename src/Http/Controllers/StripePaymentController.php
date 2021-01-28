<?php

namespace Cchivhima\Sendfood\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use Stripe;

use Cchivhima\Sendfood\Http\Drivers\Cart;

use Laravel\Cashier\Cashier;

use Cchivhima\Sendfood\Models\User;

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
    { 
        //dd($request->stripeToken);
        if (Auth::user()->hasPaymentMethod()) {

            //Auth::user()->updateDefaultPaymentMethod($request->payment_method);

        }else{

            //Auth::user()->addPaymentMethod($request->payment_method);

        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
  
          $stripe = new \Stripe\StripeClient(
            'sk_test_51H9qTECmoUmjZivffN9vpQY2Jlj1388UY1MgpW8Bs4EJxDVR7EsVoW9kNwYn0wnkRQIiDjqUIT5iq0FDTwdaX7R300zT50QHkU'
          );

          $stripe->charges->create([
            'amount' => $cart->totalPrice,
            'currency' => 'usd',
            'source' => 'tok_mastercard',
            'description' => 'My First Test Charge (created for API docs)',
          ]);

        return back()->with(['success'=>'Payment Completed Successfully']);
        Session::save();
    }

    public function stripeBillingPortal(Request $request){
        return $request->user()->redirectToBillingPortal();
    }

}
