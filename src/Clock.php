<?php

declare(strict_types=1);

namespace ChrisHarrison\Clock;

interface Clock
{
    public function now(): \DateTimeInterface;
}
