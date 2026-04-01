<?php

namespace App;

use App\Views\Render;

class Controller
{
    protected function render($view, $data = [])
    {
        Render::getInstance()->render($view, $data);
    }
}
