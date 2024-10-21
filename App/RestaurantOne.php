<?php

namespace App;

class RestaurantOne implements RestaurantInterface {
    public function prepare_food()
    {
        echo 'Preparing food!';
    }
}