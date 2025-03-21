<?php

declare(strict_types=1);

namespace ConstantsVar;

// phpcs:disable PSR1.Classes.ClassDeclaration.MultipleClasses, Squiz.Classes.ClassFileName.NoMatch

const FOO = 123;

const BAR_1 = 1;
const BAR_1 = 2;

class Bar
{
    public const int BAZ = 456;

    protected const string PROPERTY_1 = '1';
    protected const string PROPERTY_2 = '2';
}

class Spacing
{
    public const string FOO = 'bar';
    public const string BAR = 'bar';

    public const string BAZ = 'baz';

    /** Brevis, primus coordinataes foris promissio de varius, barbatus heuretes. */
    private const int BAM = 1234;
}
