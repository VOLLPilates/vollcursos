<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/pilates-kids/");

$regex = '/href="https:\/\/pay\.hotmart\.com\/D29630924Q\?off=6kces4id&#038;checkoutMode=10"/i';
$troca = 'href="'.$link_pilates_kids.'"';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>




