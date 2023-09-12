<?php

namespace App\views;

class Footer {
    public static function render($year) {
        echo "<footer>Derechos reservados {$year}</footer>";
    }
}