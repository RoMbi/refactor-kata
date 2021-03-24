<?php

namespace App\Service\Quality;

class BackstagePassesQuality extends AbstractQuality
{
    private const NO_BONUS_QUALITY = 0;
    private const BONUS_QUALITY = 1;
    private const DOUBLE_BONUS_QUALITY = 2;

    public function calculateByItem(): void
    {
        if ($this->item->isUnderMaxQuality()) {
            $this->item->increaseQuality();
            $this->calculateBonusQuality();
        }

        if ($this->item->isUnderMinSellIn()) {
            $this->item->setQuality( 0);
        }
    }

    private function calculateBonusQuality(): void
    {
        switch (true) {
            case $this->item->getSellIn() < 5:
                $bonus = self::DOUBLE_BONUS_QUALITY;
                break;
            case $this->item->getSellIn() < 10:
                $bonus = self::BONUS_QUALITY;
                break;
            default:
                $bonus = self::NO_BONUS_QUALITY;
        }

        $this->item->increaseQualityBy($bonus);
    }
}
