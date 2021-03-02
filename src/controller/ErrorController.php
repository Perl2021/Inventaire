<?php

namespace App\src\controller;

class ErrorController extends Controller
{
    public function pageNotFound()
    {
        require '../src/templates/pageErreur_404.php';
    }

    public function errorServer()
    {
        require '../src/templates/pageErreur_500.php';
    }
}