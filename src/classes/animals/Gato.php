<?php

namespace App\classes\animals;

use App\classes\Animal;
use App\interfaces\NewInterface;

class Gato extends Animal implements NewInterface
{

    public function nadar()
    {
        echo 'Estoy nadando';
    }
}
