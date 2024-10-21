<?php
declare(strict_types=1);

// Challenge 1
function get_new_name(): string
{
    $letters = range('A', 'Z');
    shuffle($letters);
    $random_nums = mt_rand(100, 999);

    return "{$letters[0]}{$letters[1]}{$random_nums}";
}

//echo get_new_name();

// Challenge 2

function isArmstrongNumber(int $number): bool
{
    $digits = str_split((string)$number);
    $digits = array_map(function ($digit) use ($digits) {
        return $digit ** count($digits);
    }, $digits);
    return $number === array_sum($digits);
}

//echo isArmstrongNumber(153);

// Coding Exercise: Series

function slices(string $series, int $size) : array
{
    $seriesLength = strlen($series);
    if ($size > $seriesLength || $size < 1) {
        return [];
    }
    $results = [];
    for ($i = 0; $i <= $seriesLength - $size; $i++) {
        $results[] = substr($series, $i, $size);
    }
    return $results;
}

print_r(slices('49142', 3));