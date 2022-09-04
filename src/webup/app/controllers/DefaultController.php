<?php

namespace webup\app\controllers;

class DefaultController
{
    public function index(): void {
        render('views/Index.php');
    }

    public function testArgs(string $id): string {
        return 'Salut id: ' . $id;
    }
}