# clock
A PHP 7 clock interface.

## Installation ##

Through Composer, obviously:

```
composer require chrisharrison/clock
```

## Examples ##

### Frozen clock (useful for testing) ###

```php
$frozenClock = new \ChrisHarrison\Clock\FrozenClock(new \DateTime('1988-05-01 16:00:00'));
echo $frozenClock->now()->format('Y-m-d H:i:s');
echo $frozenClock->now()->format('Y-m-d H:i:s');
echo $frozenClock->now()->format('Y-m-d H:i:s');
```

Outputs:
```
1988-05-01 16:00:00
1988-05-01 16:00:00
1988-05-01 16:00:00
```

### System clock (has a hard dependency on the underlying operating system's clock) ###

```php
$systemClock = new \ChrisHarrison\Clock\SystemClock;
echo $systemClock->now()->format('Y-m-d H:i:s');
echo $systemClock->now()->format('Y-m-d H:i:s');
echo $systemClock->now()->format('Y-m-d H:i:s');
```

Outputs:
```
2017-10-01 20:43:22
2017-10-01 20:43:23
2017-10-01 20:43:24
```
