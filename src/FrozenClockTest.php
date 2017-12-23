<?php

// @codingStandardsIgnoreFile

declare(strict_types=1);

namespace ChrisHarrison\Clock;

use PHPUnit\Framework\TestCase;

final class FrozenClockTest extends TestCase
{
    public function test_now_returns_time_constructed_with()
    {
        $test = new FrozenClock(\DateTimeImmutable::createFromFormat('U', (string) 1000));
        $this->assertEquals(1000, $test->now()->format('U'));
    }
}
