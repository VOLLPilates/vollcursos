<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/mobilizacao-neural/");

$regex = '/href="https:\/\/vollpilates\.com\.br\/"/i';
$troca = 'href="'.$link_mobilizacao_neural.'"';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>




