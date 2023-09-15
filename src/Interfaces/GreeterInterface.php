<?php

namespace Szogyenyid\PhpDiExample\Interfaces;

interface GreeterInterface
{
    public function __construct(WriterInterface $writer);
    public function greet($name): void;
}
