<?php

namespace Recruitment\Cart;

use Recruitment\Entity\Product;

class Item
{
    private $product;
    private $quantity;
    

    public function getProduct() : Product
    {
        return $this->product;
    }

    public function getQuantity() : int
    {
        return $this->quantity;
    }

    public function getTotalPrice(): int
    {
        return $this->quantity * $this->product->getUnitPrice();
    }

    public function setQuantity(int $quantity) : void
    {
        $this->quantity = $quantity;
    }

}