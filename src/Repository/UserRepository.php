<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\User;

class UserRepository
{
    /** @var User[] */
    private array $users = [];

    public function add(User $user): void
    {
        $this->users[] = $user;
    }

    /** @return User[] */
    public function findAll(): array
    {
        return $this->users;
    }
}
