a<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/curso-aplicado-a-coluna-vertebral/");

$regex = '/href="https:\/\/vollpilates\.com\.br\/"/i';
$troca = 'href="'.$link_coluna_vertebral.'"';

$content = preg_replace($regex, $troca, $content);  

echo $content;
?>