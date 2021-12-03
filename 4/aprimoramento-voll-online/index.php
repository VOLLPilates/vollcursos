<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/aprimoramento-voll-online");

$regex = '/href="https:\/\/pay\.hotmart\.com\/X41490645W\?off=a986ocwx"/i';
$troca = 'href="'.$link_aprimoramento.'"';
$content = preg_replace($regex, $troca, $content);

echo $content;
?>




