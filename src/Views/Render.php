<?php

namespace App\Views;

use App\Views\Extensions\TwigEnvExtension;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

class Render
{
    public Environment $twig;
    public static Render $instance;

    public static function getInstance(): Render
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
            $loader = new FilesystemLoader(__DIR__ . '/../../templates');
            self::$instance->twig = new Environment($loader, [
                'cache' => $_ENV['APP_ENV'] === 'dev' ? false : __DIR__ . '/../../var/cache/templates',
            ]);

            // load custom twig extensions
            foreach (glob(__DIR__ . '/Extensions/*.php') as $file) {
                $twigExtension = 'App\\Views\\Extensions\\' . basename($file, '.php');
                self::$instance->twig->addExtension(new $twigExtension());
            }
        }

        return self::$instance;
    }

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function render(string $template, array $data): void
    {
        echo $this->twig->load($template . '.html.twig')->render($data);
    }

}
