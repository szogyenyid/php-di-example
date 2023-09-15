<?php

namespace Szogyenyid\PhpDiExample\Classes;

use Szogyenyid\PhpDiExample\Interfaces\GreeterInterface;

class App
{
    public function __construct(
        private GreeterInterface $greeter
    ) {
    }

    public function run(string $name)
    {
        $this->greeter->greet("$name");
    }
}
