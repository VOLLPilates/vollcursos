<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/suspension-online/");

$regex = '/href="https:\/\/pay\.hotmart\.com\/C10232693K\?off=oo78llai&#038;checkoutMode=10"/i';
$troca = 'href="'.$link_voll_suspension.'"';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>




