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
        array_push($this->items, $CartItem);
        return $CartItem;

        $this->product = $product;
    }


    //Skall ta bort en produkt ur kundvagnen (använd unset())
    public function removeProduct($product)
    {
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
    public function getTotalSum($items)
    {

        $sum = 0;

        foreach ($items as $item) {
            $sum += $items["price"];
        }

        return $sum; // 5
    }
}
