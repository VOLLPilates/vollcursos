<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/imersao-do-movimento/");

$regex = '/href="https:\/\/vollpilates\.com\.br\/"/i';
$troca = 'href="'.$link_imersao_movimento.'"';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>




