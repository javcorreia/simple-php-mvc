<?php

namespace App\Views\Extensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class TwigEnvExtension extends AbstractExtension
{
    /**
     * @inheritDoc
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('env', [$this, 'getEnv']),
        ];
    }

    public function getEnv($key)
    {
        return $_ENV[$key] ?? '';
    }
}
