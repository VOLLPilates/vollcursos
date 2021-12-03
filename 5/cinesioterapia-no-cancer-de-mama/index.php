<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/cinesioterapia-no-cancer-de-mama/");

$regex = '/href="https:\/\/vollpilates\.com\.br\/"/i';
$troca = 'href="'.$link_cancer_mama.'"';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>




