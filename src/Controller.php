<?php

namespace App;

use App\Views\Render;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class Controller
{
    protected function render(string $view, array $data = []): void
    {
        try {
            Render::getInstance()->render($view, $data);
        } catch (LoaderError|RuntimeError|SyntaxError $e) {
            echo '<h1>500</h1>';
        }
    }
}
