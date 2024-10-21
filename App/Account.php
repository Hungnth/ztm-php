<?php

declare(strict_types=1);

namespace App;

use DateTime;

new DateTime();

class Account
{
    public const INTEREST_RATE = 2;
    public static int $count = 0;
    public SocialMedia $socialMedia;

    public function __construct(private string $name, private float $balance)
    {
        $this->socialMedia = new SocialMedia();
        self::$count++;
    }

    public function deposit(float $amount)
    {
        $this->balance += $amount;

        return $this;
    }

    public function get_balance(): string
    {
        return '$' . $this->balance;
    }

    public function set_balance(float $new_balance)
    {
        if ($new_balance < 0) {
            return;
        }

        $this->balance = $new_balance;
        $this->send_email();
    }

    private function send_email()
    {
        return;
    }

}
