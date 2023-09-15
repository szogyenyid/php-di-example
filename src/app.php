<?php

namespace Szogyenyid\PhpDiExample;

include __DIR__ . '/../vendor/autoload.php';

class App
{
    public function run()
    {
        echo 'Hello World!';
    }
}

$app = new App();
$app->run();
