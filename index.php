<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Model\User;
use App\Repository\UserRepository;
use App\Service\GreetingService;

$repository = new UserRepository();
$repository->add(new User('Jakub', 'jakub@example.com'));
$repository->add(new User('Martin', 'martin@example.com'));

$greeting = new GreetingService();

foreach ($repository->findAll() as $user){
    echo $greeting->greet($user->name) . PHP_EOL;
}

