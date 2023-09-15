<?php

namespace Szogyenyid\PhpDiExample\Classes\Greeters;

use Szogyenyid\PhpDiExample\Interfaces\GreeterInterface;
use Szogyenyid\PhpDiExample\Interfaces\WriterInterface;

class Helloer implements GreeterInterface
{
    public function __construct(
        private WriterInterface $writer
    ) {
    }

    public function greet($name): void
    {
        $this->writer->write("Hello $name!");
    }
}
