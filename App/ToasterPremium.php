<?php

namespace App;

class ToasterPremium extends Toaster
{
    protected int $slots;
    private int $duration = 1;

    public function __construct(int $new_duration)
    {
        parent::__construct();
        $this->slots = 4;
        $this->duration = $new_duration;
    }

    public function toast() {
        parent::toast();
        echo " for {$this->duration} minutes";
    }
}
