<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/mat-pilates-fitness/");

$regex = '/href="https:\/\/vollpilates\.com\.br\/"/i';
$troca = 'href="'.$link_mat_fitness.'"';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>




