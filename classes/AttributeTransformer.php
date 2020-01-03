<?php

declare(strict_types=1);

namespace DamianLewis\Transformer\Classes;

use Model;

class AttributeTransformer extends Transformer implements TransformerInterface
{
    /**
     * Transforms the given model to include only the name attribute.
     *
     * @param  Model  $item
     * @return array
     */
    public function transformItem(Model $item): array
    {
        return $item->only([
            'name'
        ]);
    }
}