<?php

namespace Szogyenyid\PhpDiExample\Classes\Writers;

use Szogyenyid\PhpDiExample\Interfaces\WriterInterface;

class Printer implements WriterInterface
{
    public function write(string $message): void
    {
        printf("%s\n", $message);
    }
}
