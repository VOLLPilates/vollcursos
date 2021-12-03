<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/terapia-manual/");

$regex = '/href="https:\/\/pay\.hotmart\.com\/J54720731P\?off=qwr0e3yx&#038;checkoutMode=10"/i';
$troca = 'href="'.$link_terapia_manual.'"';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>