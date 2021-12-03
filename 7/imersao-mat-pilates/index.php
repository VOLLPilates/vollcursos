<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/imersao-mat-pilates/");

$regex = '/href="https:\/\/pay\.hotmart\.com\/F54428910B\?sck=MN-VOLL"/i';
$troca = 'href="'.$link_imersao_mat_pilates.'"';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>