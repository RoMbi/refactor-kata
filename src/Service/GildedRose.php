<?php

namespace App\Service;

use App\Entity\Item;

final class GildedRose
{
    /**
     * @param Item $item
     */
    public function updateQuality(Item $item): void
    {
        $itemQualityStrategy = ItemQualityStrategyFactory::getStrategy($item);
        $itemQualityStrategy->calculate();
    }

}