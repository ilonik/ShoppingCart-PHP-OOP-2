<?php


class Cart
{
    private array $items = [];

    //TODO Skriv getter för items
    public function getItems()
    {
        return $this->items;
    }


    /*
     Skall lägga till en produkt i kundvagnen genom att
     skapa ett nytt cartItem och lägga till i $items array.
     Metoden skall returnera detta cartItem.

     VG: Om produkten redan finns i kundvagnen
     skall istället quantity på cartitem ökas.
     */

    public function addProduct($product)
    {

        //vi vill göra ett nytt cartItem och skapar det. inenhåller vilken produkt och hur många sv den produkten
        $CartItem = new CartItem($product, 1);
        //lägger till den i kundvagnen

        //push kan användas för lägga till en men vi skulle nog inte använda den..
        //array_push($this->items, $CartItem);
        $this->items[$product->getId()] = $CartItem;

        //$this->items[$product->getId()] = $CartItem;
        // $items = ["id "=> "1", "title"=>"iPhone 11"];
        return $CartItem;

        //$this->product = $product;
    }


    //Skall ta bort en produkt ur kundvagnen (använd unset())
    public function removeProduct($product)
    {
        unset($this->items[$product->getId()]);
    }

    //Skall returnera totala antalet produkter i kundvagnen
    //OBS: Ej antalet unika produkter
    public function getTotalQuantity()
    {
        $totQuantity = count($this->items);

        return $totQuantity;
    }

    //Skall räkna ihop totalsumman för alla produkter i kundvagnen


    //VG: Tänk på att ett cartitem kan ha olika quantity
    public function getTotalSum()
    {
        $sum = 0;

        foreach ($this->items as $item) {
            $sum += $item ->getProduct()->getPrice();
        }

        return $sum;
    }
}
