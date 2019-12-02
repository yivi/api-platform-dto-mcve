<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\FooDto;

class FooBar
{

    public function __invoke(FooDto $data)
    {
        return $data;
    }
}
