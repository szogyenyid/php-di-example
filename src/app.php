<?php

namespace Szogyenyid\PhpDiExample;

use Szogyenyid\PhpDiExample\Classes\Greeters\Helloer;
use Szogyenyid\PhpDiExample\Classes\Writers\Echoer;
use Szogyenyid\PhpDiExample\Interfaces\GreeterInterface;

include __DIR__ . '/../vendor/autoload.php';

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

$app = new App(
    greeter: (new Helloer((new Echoer()))),
    name: "szogyenyid"
);
$app->run();
