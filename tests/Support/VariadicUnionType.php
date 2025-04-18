<?php

declare(strict_types=1);

namespace Yiisoft\Factory\Tests\Support;

final class VariadicUnionType
{
    private array $items;

    /**
     * @param int|string ...$closures
     */
    public function __construct(...$closures)
    {
        $this->items = $closures;
    }

    public function getItems(): array
    {
        return $this->items;
    }
}
