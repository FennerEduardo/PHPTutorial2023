<?php

namespace App\views;

use App\views\Header;
use App\views\Main;
use App\views\Footer;
use App\views\Menu;

class PageRenderer {
    public static function render() {
        Header::render('Bienvenido a mi sitio web de nuevo');
        Menu::render(['Inicio', 'Acerca de', 'Contacto']);
        Main::render('Contenido principal de la página');
        Footer::render(2023);
    }
}