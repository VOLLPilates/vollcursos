<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/coletanea-patologias/");

$regex = '/<a\sclass="et_pb_button\set_pb_button_(\d+)\set_pb_bg_layout_light"\shref="https:\/\/pay\.hotmart\.com\/H5136561X\?off=jaw1q8mp&#038;checkoutMode=10"/i';

$troca = '<a class="et_pb_button et_pb_button_${1} et_pb_bg_layout_light" href="'.$link_coletanea_patologias.'"';
$content = preg_replace($regex, $troca, $content);

// Links Imagens Livros
$regex = '/<a href="https:\/\/cursosvoll.com.br\/2021\/2\/wp-content\/uploads\//i';
$troca = '<a href="https://cursosvollpilates.com.br/1/wp-content/uploads/';
$content = preg_replace($regex, $troca, $content);


echo $content;
?>




