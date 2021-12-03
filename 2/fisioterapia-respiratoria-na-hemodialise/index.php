a<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/fisioterapia-respiratoria-na-hemodialise/");

$regex = '/href="https:\/\/vollpilates\.com\.br\/"/i';
$troca = 'href="'.$link_hemodialise.'"';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>