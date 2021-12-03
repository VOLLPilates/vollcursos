<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/curso-quadril/");

$regex = '/href="https:\/\/pay.hotmart\.com\/J41340079N\?off=nuz71899&#038;checkoutMode=10"/i';
$troca = 'href="'.$link_curso_quadril.'"';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>




