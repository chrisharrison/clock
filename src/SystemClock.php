<?php

namespace ChrisHarrison\Clock;

class SystemClock implements Clock
{
    public function now(): \DateTimeInterface
    {
        return new \DateTimeImmutable();
    }
}