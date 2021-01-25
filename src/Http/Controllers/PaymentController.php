<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace Cchivhima\Sendfood\Http\Controllers;

class PaymentController extends Controller
{
 public function reviewTransfer(){
    if (!Session::get('cart')->totalQty==0 && !Session::get('receivingmethod')==null && !Session::get('beneficiaryid')==null ) {
        return view('sendfood::Plugins.payment.review-transfer');
    }else{
        return redirect()->back()->with(['error'=>'Please Complete this steps To Proceed: <br> 1. Create a new Beneficiary By Clicking Add New Beneficiary <br> or <br> Select Existing Beneficiary From The List Below. <br> 2. Create Receiving Method.']);
    }
     
 }

 public function reviewOrder(){
    return view('sendfood::Plugins.payment.review-order');
 }

}
