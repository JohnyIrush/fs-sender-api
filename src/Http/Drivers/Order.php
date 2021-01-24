<?php

namespace Cchivhima\Sendfood\Http\Drivers;

class Order
{
    public $items = null; //store all selected products
    public $totalQty = 0; // total stored products
    public $totalPrice = 0; // total price of all products

    /**
     * 
     * 
     * 
    */
    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    
}