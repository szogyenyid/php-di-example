<?php

namespace Szogyenyid\PhpDiExample\Interfaces;

interface WriterInterface
{
    public function write(string $message): void;
}
