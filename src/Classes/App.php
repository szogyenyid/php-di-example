<?php

namespace Szogyenyid\PhpDiExample\Classes;

use Szogyenyid\PhpDiExample\Interfaces\GreeterInterface;

class App
{
    public function __construct(
        private GreeterInterface $greeter,
        private string $name = 'World'
    ) {
    }
    public function run()
    {
        $this->greeter->greet("$this->name");
    }
}
