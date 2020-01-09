<?php

declare(strict_types=1);

namespace DamianLewis\Transformer\Classes;

use Cms\Classes\ComponentBase;
use Model;
use October\Rain\Database\Collection;

abstract class TransformerComponent extends ComponentBase
{
    /**
     * @var Transformer
     */
    protected $transformer;

    /**
     * Returns the transformed model.
     *
     * @param  Model  $model
     * @return array
     */
    protected function transformItem(Model $model): array
    {
        return $this->transformer->transformItem($model);
    }

    /**
     * Returns the transformed collection.
     *
     * @param  Collection  $categories
     * @return array
     */
    protected function transformCollection(Collection $categories): array
    {
        return $this->transformer->transformCollection($categories);
    }
}