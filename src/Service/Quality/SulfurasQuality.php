<?php

namespace App\Service\Quality;

use App\Entity\Item;
use App\Service\ItemQualityStrategyInterface;

class SulfurasQuality implements ItemQualityStrategyInterface
{
    /** @var Item */
    private $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function calculate(): void
    {
        $this->item->setQuality(80);
    }
}
