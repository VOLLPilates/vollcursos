a<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/treinamento-muscular-respiratorio/");

$regex = '/href="https:\/\/vollpilates\.com\.br\/"/i';
$troca = 'href="'.$link_treinamento_muscular.'"';

$content = preg_replace($regex, $troca, $content);  

echo $content;
?>