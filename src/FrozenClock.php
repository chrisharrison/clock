<?php

namespace ChrisHarrison\Clock;

class FrozenClock implements Clock
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