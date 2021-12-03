<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/metodo-hipopressivo");

$regex = '/href="https:\/\/pay\.hotmart\.com\/K56202825M\?sck=MN-VOLL"/i';
$troca = 'href="'.$link_metodo_hipopressivo.'"';
$content = preg_replace($regex, $troca, $content);

echo $content;
?>
