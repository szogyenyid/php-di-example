<?php

namespace Szogyenyid\PhpDiExample;

use Szogyenyid\PhpDiExample\Classes\Writers\Echoer;
use Szogyenyid\PhpDiExample\Interfaces\WriterInterface;

include __DIR__ . '/../vendor/autoload.php';

class App
{
    public function __construct(
        private WriterInterface $writer,
        private string $greeting = 'Hello',
        private string $name = 'World'
    ) {
    }
    public function run()
    {
        $this->writer->write("$this->greeting $this->name!");
    }
}

$app = new App(
    writer: (new Echoer()),
    name: "szogyenyid"
);
$app->run();
