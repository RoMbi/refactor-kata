<?php

namespace App\Service;

use App\Dictionary\ItemName;
use App\Entity\Item;
use App\Service\Quality\AgedBrieQuality;
use App\Service\Quality\BackstagePassesQuality;
use App\Service\Quality\DefaultQuality;
use App\Service\Quality\SulfurasQuality;

class ItemQualityStrategyFactory
{
    /**
     * @param Item $item
     *
     * @return ItemQualityStrategyInterface
     */
    public static function getStrategy(Item $item): ItemQualityStrategyInterface
    {
        switch ($item->getName()) {
            case ItemName::AGED_BRIE:
                return new AgedBrieQuality($item);
            case ItemName::BACKSTAGE_PASSES:
                return new BackstagePassesQuality($item);
            case ItemName::SULFURAS:
                return new SulfurasQuality($item);
            default:
                return new DefaultQuality($item);
        }
    }
}
