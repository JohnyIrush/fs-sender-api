<?php

namespace Cchivhima\Sendfood\Http\Drivers;

use Session;


class Memory
{

    public function __construct(){
    
    }

    //set selected or created beneficiary 
    public function beneficiary($beneficiaryid)
    {

        Session::put('beneficiaryid',$beneficiaryid);
    }

    //set created payment method
    public function receivingMethod($receivingmethod)
    {

        Session::put('receivingmethod',$receivingmethod);
    }
    
}