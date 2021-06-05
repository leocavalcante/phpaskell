<?php declare(strict_types=1);

namespace App;

final class Some extends Maybe
{
    public function map(callable $fn): self
    {
        return new Some($fn($this->value));
    }
}