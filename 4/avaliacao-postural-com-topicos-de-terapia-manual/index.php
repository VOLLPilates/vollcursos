<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/avaliacao-postural-com-topicos-de-terapia-manual/");

$regex = '/href="https:\/\/vollpilates\.com\.br\/"/i';
$troca = 'href="'.$link_avaliacao_postural.'"';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>




