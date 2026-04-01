<?php

namespace App\Views;

class Render
{
    public $twig;
    public static $instance;

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
            $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../../templates');
            self::$instance->twig = new \Twig\Environment($loader, [
                'cache' => $_ENV['APP_ENV'] === 'dev' ? false : __DIR__ . '/../../var/cache/templates',
            ]);
        }

        return self::$instance;
    }

    public function render(string $template, array $data)
    {
        echo $this->twig->load($template . '.html.twig')->render($data);
    }

}
