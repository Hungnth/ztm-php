<?php

namespace App;

class FoodApp
{
    public function __construct(RestaurantInterface $restaurant)
    {
        $restaurant->prepare_food();
    }
}