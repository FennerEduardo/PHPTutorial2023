<?php

namespace App\views;

class Menu {
    public static function render($items) {
        echo '<nav><ul>';
        foreach ($items as $item) {
            echo "<li><a href='#'>{$item}</a></li>";
        }
        echo '</ul></nav>';
    }
}