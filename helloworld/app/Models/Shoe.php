<?php

namespace App\Models;

class Shoe
{
    public $name;

    public function __construct($name = "Superga") 
    {
        $this->name = $name;
    }


}