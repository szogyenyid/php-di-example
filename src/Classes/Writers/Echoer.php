<?php

namespace Szogyenyid\PhpDiExample\Classes\Writers;

use Szogyenyid\PhpDiExample\Interfaces\WriterInterface;

class Echoer implements WriterInterface
{
    public function write(string $message): void
    {
        echo $message . PHP_EOL;
    }
}
