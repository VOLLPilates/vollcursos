<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/formacao-em-mat-pilates");

$regex = '/href="https:\/\/vollpilates\.com\.br\/"/i';
$troca = 'href="'.$link_mat_formacao.'"';
$content = preg_replace($regex, $troca, $content);

echo $content;
?>




