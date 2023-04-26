<?php

namespace App\LateBinding;

class ClassA
{
    protected static string $name = 'A';

    public function getName(): string
    {
        return static::$name;
    }

    public static function make()
    {
        return new ClassA();
    }
}