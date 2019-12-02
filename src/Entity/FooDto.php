<?php

declare(strict_types=1);

namespace App\Entity;

use DateTimeImmutable;
use Exception;

class FooDto
{

    private string $a;
    private int $b;
    private DateTimeImmutable $c;

    /**
     * FooDto constructor.
     *
     * @param string            $a
     * @param int               $b
     * @param DateTimeImmutable $c
     *
     * @throws Exception
     */
    public function __construct(string $a, int $b, ?DateTimeImmutable $c = null)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c ?? new DateTimeImmutable();
    }

    /**
     * @return string
     */
    public function getA(): string
    {
        return $this->a;
    }

    /**
     * @return int
     */
    public function getB(): int
    {
        return $this->b;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getC(): ?DateTimeImmutable
    {
        return $this->c;
    }


}
