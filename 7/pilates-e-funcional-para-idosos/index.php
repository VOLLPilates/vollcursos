<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/pilates-e-funcional-para-idosos/");

$regex = '/href="https:\/\/pay\.hotmart\.com\/T9878404F\?off=buiy31dv&#038;checkoutMode=10"/i';
$troca = 'href="'.$link_pilates_idosos.'"';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>




