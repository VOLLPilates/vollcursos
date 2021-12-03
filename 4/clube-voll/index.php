<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/clube-voll/");

$regex = '/href="https:\/\/pay\.hotmart\.com\/O53715622D\?checkoutMode=10&#038;sck=MN-VOLL"/i';
$troca = 'href="'.$link_clube_voll.'"';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>
