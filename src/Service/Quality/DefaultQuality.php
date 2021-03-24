<?php

namespace App\Service\Quality;

class DefaultQuality extends AbstractQuality
{
    public function calculateByItem(): void
    {
        if ($this->item->isAboveMinQuality()) {
            $this->item->decreaseQuality();
        }

        if ($this->item->isUnderMinSellIn() && $this->item->isAboveMinQuality()) {
            $this->item->decreaseQuality();
        }
    }
}
