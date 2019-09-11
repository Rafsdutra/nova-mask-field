<?php

namespace Rafsd\MaskField;

use Laravel\Nova\Fields\Field;

class MaskField extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'mask-field';

    /**
     * Set input mask
     *
     * @param  String  $mask
     * @return $this
     */
    public function mask(String $mask = '')
    {
        return $this->withMeta([__FUNCTION__ => $mask]);
    }

    public function raw(bool $raw = true)
    {
        return $this->withMeta([__FUNCTION__ => $raw]);
    }
}
