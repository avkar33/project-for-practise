<?php

namespace App\Services;

class MoneyFormatter
{
    private $value;
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function eraseString($string)
    {
        return str_replace([' ', ',', '.', '_', '-'], '', $string);
    }

    public function formatted()
    {
        $string = is_string($this->value) ? $this->value : strval($this->value);
        $string = $this->eraseString($string);
        $digits = strlen($string);
        $result = '';
        for ($i = 0; $i < $digits; $i++) {
            if ($i % 3 == 0 && $i != 0) {
                $result = ' ' . $result;
            }
            $result = substr($string, ($digits - ($i + 1)), 1) . $result;
        }
        return $result;
    }
}
