<?php

declare(strict_types=1);

namespace DamianLewis\Transformer;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name' => 'Transformer',
            'description' => 'Abstract classes for transforming data.',
            'author' => 'Damian Lewis',
            'icon' => 'icon-leaf'
        ];
    }
}
