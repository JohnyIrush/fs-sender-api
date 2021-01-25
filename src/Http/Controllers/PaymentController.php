<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace Cchivhima\Sendfood\Http\Controllers;

class PaymentController extends Controller
{
 public function reviewTransfer(){
     return view('sendfood::Plugins.payment.review-transfer');
 }

 public function reviewOrder(){
    return view('sendfood::Plugins.payment.review-order');
 }

}
