<?php

namespace Cchivhima\Sendfood\Http\Drivers;

class Cart
{
    public $items = null; //store all selected products
    public $totalQty = 0; // total stored products
    public $totalPrice = 0; // total price of all products

    /**
     * pass the old cart 
     * products => prevent 
     * losing old cart data
    */
    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    //store new product to existing or empty cart
    public function add($item,$id,$productcategory){
        $storedItem = ['qty'=>0,
                       'price'=>$item->price,
                       'item'=>$item
                    ];
         /**
          * check if the
          * new product already
          * exist if it exists
          * increment quantity
          * the price and the sub total 
          *price of that product we only need 
          *the product information once
         */
        if ($this->items) {
         if (array_key_exists(($id + $productcategory),$this->items)) {
            $storedItem = $this->items[($id+$productcategory)];
         }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[($id+$productcategory)] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    //store new product to existing or empty cart
    public function addMore($item,$id,$more){
        $storedItem = ['qty'=>0,
                       'price'=>$item->price,
                       'item'=>$item
                    ];
         /**
          * check if the
          * new product already
          * exist if it exists
          * increment quantity
          * the price and the sub total 
          *price of that product we only need 
          *the product information once
         */
        if ($this->items) {
         if (array_key_exists(($id+$productcategory),$this->items)) {
            $storedItem = $this->items[($id+$productcategory)];
         }
        }
        $storedItem['qty']= $more;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[($id+$productcategory)] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    public function reduceByOne($id,$productcategory){
     $this->items[($id+$productcategory)]['qty']--;
     $this->items[($id+$productcategory)]['price'] -= $this->items[($id+$productcategory)]['item']['price'];
     $this->totalQty--;
     $this->totalPrice -= $this->items[($id+$productcategory)]['item']['price'];
     if ($this->items[($id+$productcategory)]['qty']<=0) {
         unset($this->items[($id+$productcategory)]);
     }
    } 

    public function removeItem($id,$productcategory){
        $this->totalQty -=$this->items[($id+$productcategory)]['qty'];
        $this->totalPrice -= $this->items[($id+$productcategory)]['price'];
        unset($this->items[($id+$productcategory)]);
    }
}