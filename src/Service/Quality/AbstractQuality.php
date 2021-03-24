<?php

namespace App\Service\Quality;

use App\Entity\Item;
use App\Service\ItemQualityStrategyInterface;

abstract class AbstractQuality implements ItemQualityStrategyInterface
{
    /** @var Item */
    protected $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function calculate(): void {
        $this->item->decreaseSellIn();
        $this->calculateByItem();
    }

    abstract public function calculateByItem(): void;
}
