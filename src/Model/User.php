<?php

declare(strict_types=1);

namespace App\Model;

class User
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
    ) {}
}
