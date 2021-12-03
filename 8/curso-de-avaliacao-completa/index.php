<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/curso-de-avaliacao-completa");

$regex = '/href="https:\/\/pay\.hotmart\.com\/W41339926L\?off=li0iojje"/i';
$troca = 'href="'.$link_avaliacao_completo.'"';
$content = preg_replace($regex, $troca, $content);

echo $content;
?>




