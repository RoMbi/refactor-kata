<?php

namespace App\Entity;

use App\Dictionary\Quality;
use App\Dictionary\SellIn;

final class Item
{
    /** @var string  */
    private $name;

    /** @var int  */
    private $sellIn;

    /** @var int  */
    private $quality;

    public function __construct(string $name, int $sellIn, int $quality)
    {
        $this->name = $name;
        $this->sellIn = $sellIn;
        $this->quality = $quality;
    }

    public function increaseQuality(): void
    {
        ++$this->quality;
    }

    public function increaseQualityBy($quality): void
    {
        $this->quality += $quality;
    }

    public function decreaseQuality(): void
    {
        --$this->quality;
    }

    public function decreaseSellIn(): void
    {
        --$this->sellIn;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getSellIn(): int
    {
        return $this->sellIn;
    }

    /**
     * @param int $sellIn
     */
    public function setSellIn(int $sellIn): void
    {
        $this->sellIn = $sellIn;
    }

    /**
     * @return int
     */
    public function getQuality(): int
    {
        return $this->quality;
    }

    /**
     * @param int $quality
     */
    public function setQuality(int $quality): void
    {
        $this->quality = $quality;
    }

    public function isUnderMinSellIn(): bool
    {
        return $this->sellIn < SellIn::MIN;
    }

    public function isUnderMaxQuality(): bool
    {
        return $this->quality < Quality::MAX;
    }

    public function isAboveMinQuality(): bool
    {
        return $this->quality > Quality::MIN;
    }
}