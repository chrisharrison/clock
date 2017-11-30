<?php

declare(strict_types=1);

namespace ChrisHarrison\Clock;

final class SystemClock implements Clock
{
    public function now(): \DateTimeInterface
    {
        return new \DateTimeImmutable();
    }
}
