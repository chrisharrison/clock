<?php

namespace ChrisHarrison\Clock;

interface Clock
{
    public function now(): \DateTimeInterface;
}