<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    $formatted_class = str_replace("\\", "/", $class);
    $path = "{$formatted_class}.php";

    require_once $path;
});

use App\{Account,
    SocialMedia,
    Utility,
    ToasterPremium,
    AbstractProduct,
    RestaurantOne,
    RestaurantTwo,
    FoodApp,
    RestaurantInterface,
    EmptyArrayException,
    CurrentWeek
};

$current_week = new CurrentWeek();
foreach ($current_week as $key => $value) {
    var_dump($key, $value);
    echo '<br>';
}