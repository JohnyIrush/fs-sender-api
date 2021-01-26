<?php

namespace Cchivhima\Sendfood\Http\Drivers;

use Session;


class Memory
{

    public $slectedpaymentMethod = null; //store


    public function __construct(){
    
    }

    //set selected or created beneficiary 
    public function beneficiary($beneficiaryid)
    {

        Session::put('beneficiaryid',$beneficiaryid);
    }

    //set created receiving Method method
    public function receivingMethod($receivingmethod)
    {

        Session::put('receivingmethod',$receivingmethod);
    }

    //set created payment method
    public function paymentMethod($setpaymentmethod)
    {
    Session::put('selectpaymentmethod',$setpaymentmethod);
    Session::save();
    }
    
}