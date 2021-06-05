<?php declare(strict_types=1);

namespace App;

/**
 * @template A
 */
interface Functor
{
    /**
     * @template B
     * @param callable(A):B $fn
     * @return mixed
     */
    public function map(callable $fn);
}