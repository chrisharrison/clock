<?php

declare(strict_types=1);

namespace ChrisHarrison\Clock;

final class FrozenClock implements Clock
{
    private $dateTime;

    public function __construct(\DateTimeInterface $dateTime)
    {
        $this->dateTime = $dateTime;
    }

    public function now(): \DateTimeInterface
    {
        return $this->dateTime;
    }
}
