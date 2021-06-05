<?php declare(strict_types=1);

namespace App;

/**
 * @template A
 * @template-implements Functor<A>
 */
abstract class Maybe implements Functor
{
    /** @var A */
    protected $value;

    /**
     * @param A $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }
}