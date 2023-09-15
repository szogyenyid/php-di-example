<?php

namespace Szogyenyid\PhpDiExample;

use InvalidArgumentException;

include __DIR__ . '/../vendor/autoload.php';

class App
{
    public function __construct(
        private string $function = 'echo',
        private string $greeting = 'Hello',
        private string $name = 'World'
    ) {
    }
    public function run()
    {
        if ($this->function === 'echo') {
            echo $this->greeting . ' ' . $this->name . '!' . PHP_EOL;
        } else {
            throw new InvalidArgumentException('Invalid function');
        }
    }
}

$app = new App(
    name: "szogyenyid"
);
$app->run();
