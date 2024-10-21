<?php

namespace App;

abstract class AbstractProduct
{
    public function turn_on() {
        echo 'Turning on product';
    }

    abstract public function setup();
}
