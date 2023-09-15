<?php

namespace App\classes;

use App\interfaces\MyInterface;
use App\traits\MyTrait;
use App\traits\NewTrait;

class Animal implements MyInterface {
    use MyTrait, NewTrait;

    public function respirar() {
        echo 'Está respirando.';
    }
}