<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/mit-movimento-inteligente");

$regex = '/href="https:\/\/pay\.hotmart\.com\/U41339724B\?off=0iafv540"/i';
$troca = 'href="'.$link_mit.'"';
$content = preg_replace($regex, $troca, $content);

echo $content;
?>




