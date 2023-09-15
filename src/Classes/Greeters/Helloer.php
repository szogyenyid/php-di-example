<?php

namespace Szogyenyid\PhpDiExample\Classes\Greeters;

use DI\Attribute\Inject;
use Szogyenyid\PhpDiExample\Classes\Writers\Echoer;
use Szogyenyid\PhpDiExample\Interfaces\GreeterInterface;
use Szogyenyid\PhpDiExample\Interfaces\WriterInterface;

class Helloer implements GreeterInterface
{
    public function __construct(
        #[Inject(Echoer::class)]
        private WriterInterface $writer
    ) {
    }

    public function greet($name): void
    {
        $this->writer->write("Hello $name!");
    }
}
