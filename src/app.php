<?php

namespace Szogyenyid\PhpDiExample;

use Szogyenyid\PhpDiExample\Classes\App;
use Szogyenyid\PhpDiExample\Classes\Greeters\Helloer;
use Szogyenyid\PhpDiExample\Classes\Writers\Echoer;

include __DIR__ . '/../vendor/autoload.php';

$app = new App((new Helloer((new Echoer()))));
$app->run("szogyenyid");
