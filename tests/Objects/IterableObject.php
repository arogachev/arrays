<?php

declare(strict_types=1);

namespace Yiisoft\Arrays\Tests\Objects;

use ArrayIterator;
use IteratorAggregate;

final class IterableObject implements IteratorAggregate
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->data);
    }
}
