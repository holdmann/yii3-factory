<?php

declare(strict_types=1);

namespace Yiisoft\Factory\Tests\Support;

final class SelfUnionType
{
    private string $color;

    /**
     * @param \Yiisoft\Factory\Tests\Support\ColorInterface|$this $source
     */
    public function __construct($source)
    {
        $this->color = $source->getColor();
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
