<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/avancado-patologias/");

$regex = '/href="https:\/\/pay\.hotmart\.com\/J47209083Y\?checkoutMode=10"/i';
$troca = 'href="'.$link_avancado_patologias_normal.'"';
$content = preg_replace($regex, $troca, $content);

$regex = '/href="https:\/\/pay\.hotmart\.com\/I47265275V\?off=odsk3vmf&#038;checkoutMode=6"/i';
$troca = 'href="'.$link_avancado_patologias_assinatura.'"';
$content = preg_replace($regex, $troca, $content);

echo $content;
?>
