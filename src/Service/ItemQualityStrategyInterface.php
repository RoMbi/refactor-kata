<?php

namespace App\Service;

use App\Entity\Item;

interface ItemQualityStrategyInterface
{
    /**
     * @param Item $tem
     */
    public function __construct(Item $tem);
    public function calculate();
}
