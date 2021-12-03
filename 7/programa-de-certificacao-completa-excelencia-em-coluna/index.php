<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/programa-de-certificacao-completa-excelencia-em-coluna/");

$regex = '/href="https:\/\/vollpilates\.com\.br\/"/i';
$troca = 'href="'.$link_certificao_coluna.'"';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>




