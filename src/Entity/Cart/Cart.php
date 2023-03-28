<?php

namespace Recruitment\Cart;

use Recruitment\Entity\Product;
use Exception;

class Cart {

    private $items;

    public function getItems()
    {
        return $this->items;
    }

    public function getTotalPrice() 
    {
        
    }

    public function getItem(int $index) 
    {
        return $this->items[$index];
    }

    public function addProduct(Product $product, int $quantity)
    {
        
    }

    public function removeProduct(Product $product)
    {
        
    }

    public function setQuantity(Product $product, int $quantity)
    {
        
    }

    public function checkout()
    {

    }

}