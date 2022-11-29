<?php


class CartItem
{
    private $product;
    private int $quantity;

    // TODO Skriv en konstruktor som sätter alla properties

    public function __construct($product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    // TODO Skriv getters för alla properties
    public function getproduct(){
        return $this->product;
    }

    public function getquantity(){
        return $this->quantity;
    }


    //VG: Skall utöka antalet på ett cartItem med 1. 
    //VG: Det skall inte vara möjligt att utöka så att antalet överstiger produktens $inStock.
    public function increaseQuantity()
    {
        $inc = $this->quantity += 1;

        return $inc;

         // $inc = $this -> quantity =+2;
        // return;


        // $CartItem = new CartItem($product, 1);
       
        
        // $this->items[$product->getId()] = $CartItem;

        // //$this->items[$product->getId()] = $CartItem;
        // // $items = ["id "=> "1", "title"=>"iPhone 11"];
        // return $CartItem;
    }
}
