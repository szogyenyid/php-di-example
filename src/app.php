<?php

namespace Szogyenyid\PhpDiExample;

use DI\Definition\Exception\InvalidDefinition;
use Szogyenyid\PhpDiExample\Classes\App;
use Szogyenyid\PhpDiExample\Classes\Greeters\Helloer;
use Szogyenyid\PhpDiExample\Classes\Writers\Printer;
use Szogyenyid\PhpDiExample\Interfaces\GreeterInterface;
use Szogyenyid\PhpDiExample\Interfaces\WriterInterface;

include __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->useAttributes(true);
$containerBuilder->addDefinitions([
    GreeterInterface::class => \DI\autowire(Helloer::class),
    WriterInterface::class => \DI\autowire(Printer::class),
]);
$container = $containerBuilder->build();

try {
    $app = $container->get(App::class);
    $app->run("szogyenyid");
} catch (InvalidDefinition $e) {
    echo "Invalid definition: " . $e->getMessage();
}
