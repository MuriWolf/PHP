<?php

namespace Classes\Subclasses;

class Smartphone {

    public string $brand;

    public function __construct(string $brand) { 
        $this->brand = $brand;
    }
}