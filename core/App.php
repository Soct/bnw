<?php

namespace Task\Core;

class App
{
    protected static $container = [];

    public static function bind($key, $value)
    {
        static::$container[$key] = $value;
    }

    public static function get($key)
    {
        if (!array_key_exists($key, static::$container)) {
            throw new Exception("No {$key} defined in the container");
        }

        return static::$container[$key];
    }
}
