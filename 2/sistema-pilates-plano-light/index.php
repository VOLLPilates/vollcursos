<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/sistema-pilates-plano-light/");

$regex = '/href="https:\/\/vollpilates\.com\.br\/"/i';
$troca = 'href="'.$link_sistema_pilates.'"';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>




