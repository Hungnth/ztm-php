<?php

namespace App;

class Utility
{
    /**
     * Neatly prints an array
     *
     * Outputs an array surrounded by pre tags for formatting
     * @param array $array The array to output
     * @return void
     */
    public static function print_array(array $array): void
    {
        if (count($array) === 0) {
            throw new EmptyArrayException();
        }

        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}

