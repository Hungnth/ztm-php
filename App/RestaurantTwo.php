<?php

namespace App;

class RestaurantTwo implements RestaurantInterface {
    public function prepare_food()
    {
        echo 'Preparing food from restaurant two';
    }
}