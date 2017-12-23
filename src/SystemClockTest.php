<?php

// @codingStandardsIgnoreFile

declare(strict_types=1);

namespace ChrisHarrison\Clock;

use PHPUnit\Framework\TestCase;

final class SystemClockTest extends TestCase
{
    public function test_now_returns_time_consistent_with_system_clock()
    {
        $test = new SystemClock;
        $this->assertEquals($test->now()->format('U'), time());
    }
}
