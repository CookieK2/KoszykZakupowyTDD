<?php

namespace Recruitment\Entity;

class Product {
    private $unitPrice;
    private $minimumQuantity;

    public function setUnitPrice(int $unitPrice): Product {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    public function setMinimumQuantity(int $minimumQuantity): Product {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

}