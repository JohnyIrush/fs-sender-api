<?php

namespace Cchivhima\Sendfood\Http\Controllers;

use Illuminate\Http\Request;

use Session;


class ZipWalletPaymentController extends Controller
{
    /**
     * Render Pay with Stripe Front-end
     * 
     */
    public function payWithZipWallet()
    {
        if (!Session::get('cart')->totalQty==0 && !Session::get('receivingmethod')==null && !Session::get('beneficiaryid')==null && !Session::get('selectpaymentmethod')==null && !Session::get('beneficiaryid')==null && !Session::get('selectpaymentmethod')==null && Session::get('selectpaymentmethod')['id']==2 )
         {
           return view('sendfood::Plugins.payment.paywithzipwallet');
         }else{

            return redirect()->back()->with(['error'=>'Please Select Payment Method']);
            Session::save();

        }

    }

    /**
     * Execute Stripe Payment
     * 
     */
    public function makeZipWalletPayment(Request $request)
    {
        dd($request);
    }

}
