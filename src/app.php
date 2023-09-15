<?php

namespace Szogyenyid\PhpDiExample;

use Szogyenyid\PhpDiExample\Classes\App;
use Szogyenyid\PhpDiExample\Classes\Greeters\Helloer;
use Szogyenyid\PhpDiExample\Classes\Writers\Echoer;

include __DIR__ . '/../vendor/autoload.php';

$app = new App(
    greeter: (new Helloer((new Echoer()))),
    name: "szogyenyid"
);
$app->run();
