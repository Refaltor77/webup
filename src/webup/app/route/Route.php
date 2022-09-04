<?php

use Pecee\SimpleRouter\SimpleRouter;
use webup\app\controllers\DefaultController;

# [Controller, function dans le controller] (c'est la meilleur méthode a faire)
SimpleRouter::get('/', [DefaultController::class, 'index']);

# [Controller, function dans le controller] (la function recevra les gars automatiquement)
# exemple: goldrushmc.fun/testargs/5
SimpleRouter::get('/testargs/{id}', [DefaultController::class, 'testArgs']);



SimpleRouter::get('/test', function () {
    render('/');
});



SimpleRouter::get('/test2', function () {
    # pareil que /test mais c'est pour faire aussi des response en json (hein theo)
    response()->redirect('/');
});



SimpleRouter::get('/test3', function () {
    response()->json([
        'code' => '404',
        'msg' => 'coucou world'
    ]);
});