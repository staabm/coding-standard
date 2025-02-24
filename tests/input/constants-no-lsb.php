<?php

declare(strict_types=1);

namespace Test;

// phpcs:disable SlevomatCodingStandard.TypeHints.ClassConstantTypeHint

class ConstantLsb
{
    public const A = 123;

    public function __construct()
    {
        echo static::A;
    }
}
