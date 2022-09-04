<?php

include __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/autoload/HelperRouter.php';
include __DIR__ . '/src/webup/app/route/Route.php';


use Pecee\SimpleRouter\SimpleRouter;
use webup\app\Main;

if (strstr('salut', 'salutzz')) var_dump('oui');

spl_autoload_register(function (string $classname): void {
    $explode = explode('\\', $classname);
    if ($explode[0] === 'webup') {
        $classname = "./src/" . str_replace("\\", "/", $classname) . ".php";
        require_once($classname);
    }
});


$main = new Main();
$main->startingWebsite();

SimpleRouter::start();