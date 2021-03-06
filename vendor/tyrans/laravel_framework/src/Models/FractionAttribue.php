<?php

namespace Tyrans\Framework\Models;

trait FractionAttribue {

    protected $attributes = [];

    protected $fractions = [];

    protected function isFraction($key) {
        return array_has($this->fractions, $key);
    }

    public function fractionAttribue($key, $value) {
        $unit = $this->fractions[$key];
        $this->attributes[$key] = intval(floatval($value) * $unit);
        return $this;
    }

    public function fractionAttribueValue($key) {
        $unit = $this->fractions[$key];
        return floatval(intval($this->getAttributeFromArray($key)) / $unit);
    }

}