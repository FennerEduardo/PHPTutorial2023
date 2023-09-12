<?php

namespace App\classes;

use App\interfaces\MyInterface;
use App\traits\MyTrait;

class Animal implements MyInterface {
    use MyTrait;

    public function respirar() {
        echo 'Está respirando.';
    }
}