<?php

namespace Cchivhima\Sendfood\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use Cchivhima\Sendfood\Models\Beneficiary;

use Cchivhima\Sendfood\Http\Drivers\Memory;

use Cchivhima\Sendfood\Http\Drivers\Cart;


class PaymentController extends Controller
{
 public function reviewTransfer(){
    // dd(Session::get('receivingmethod'));
    if (!Session::get('cart')->totalQty==0 && !Session::get('receivingmethod')==null && !Session::get('beneficiaryid')==null ) {
         $beneficiary = Beneficiary::find(Session::get('beneficiaryid'));
        return view('sendfood::Plugins.payment.review-transfer')->with([
           'beneficiary'=> $beneficiary
        ]);
    }else{
        return redirect()->back()->with(['error'=>'Please Complete this steps To Proceed: <br> 1. Create a new Beneficiary By Clicking Add New Beneficiary <br> or <br> Select Existing Beneficiary From The List Below. <br> 2. Create Receiving Method.']);
        Session::save();
    }
     
 }

 public function reviewOrder(){
   if (!Session::get('cart')->totalQty==0 && !Session::get('receivingmethod')==null && !Session::get('beneficiaryid')==null && !Session::get('selectpaymentmethod')==null ) {
      $beneficiary = Beneficiary::find(Session::get('beneficiaryid'));
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      return view('sendfood::Plugins.payment.review-order')->with([
         'beneficiary'=> $beneficiary,
         'cart' => $cart
      ]);
 }else{
     return redirect()->back()->with(['error'=>'Please Select Payment Method']);
     Session::save();
 }
    
 }

 public function selectedPaymentMethod(Request $request){
    //dd($request);
    $PayMentMethod = [
       'id' => $request->id,
       'method' => $request->method,
       'description' => $request->description
    ];
   //$request->session()->put('selectpaymentmethod',$request);
   //Session::put('selectpaymentmethod',$PayMentMethod);
   //Session::save();
   //dd(Session::get('selectpaymentmethod'));
     $memory = new Memory();
     $memory->paymentMethod($PayMentMethod);
}

 
}
