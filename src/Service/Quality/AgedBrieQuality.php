<?php

namespace App\Service\Quality;

class AgedBrieQuality extends AbstractQuality
{
    public function calculateByItem(): void
    {
        if ($this->item->isUnderMaxQuality()) {
            $this->item->increaseQuality();
        }

        if ($this->item->isUnderMinSellIn() && $this->item->isUnderMaxQuality()) {
            $this->item->increaseQuality();
        }
    }
}
