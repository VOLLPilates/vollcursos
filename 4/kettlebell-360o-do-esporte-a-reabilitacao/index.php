a<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/kettlebell-360o-do-esporte-a-reabilitacao/");

$regex = '/href="https:\/\/vollpilates\.com\.br\/"/i';
$troca = 'href="'.$link_kettlebell.'"';

$content = preg_replace($regex, $troca, $content);  

echo $content;
?>