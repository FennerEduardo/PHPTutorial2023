<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\classes\Animal;
use App\classes\animals\Gato;
use App\views\PageRenderer;

PageRenderer::render();

echo '<hr>';

$animal = new Animal();
$animal->hablar();
$animal->caminar();

echo '<hr>';

$gato = new Gato();
$gato->hablar();
