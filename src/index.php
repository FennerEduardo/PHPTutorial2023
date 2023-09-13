<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\classes\Animal;
use App\classes\animals\Gato;
use App\views\PageRenderer;
use Dompdf\Dompdf;

PageRenderer::render();

echo '<hr>';

$animal = new Animal();
$animal->hablar();
$animal->caminar();

echo '<hr>';

$gato = new Gato();
$gato->hablar();

echo '<hr>';
$html = file_get_contents('views/html/firstPDF.html');
$dompdf = new Dompdf();
// $dompdf->loadHtml('<h1>Hola mundo</h1><br>');
$dompdf->loadHtml($html);
$dompdf->render();
$content = $dompdf->output();

$name = 'files/'.time()."_new.pdf";
$bytes = file_put_contents($name, $content);
