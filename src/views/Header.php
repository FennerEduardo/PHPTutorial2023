<?php

namespace App\views;

class Header {
    public static function render($title) {
        echo "<header>{$title}</header>";
    }
}