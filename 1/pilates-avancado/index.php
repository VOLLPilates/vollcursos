<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/pilates-avancado/");

$regex = '/href="https:\/\/pay\.hotmart\.com\/K9062399L\?off=hmtjj2hr&#038;checkoutMode=10"/i';
$troca = 'href="'.$link_pilates_avancado.'"';
$content = preg_replace($regex, $troca, $content);

echo $content;
?>




