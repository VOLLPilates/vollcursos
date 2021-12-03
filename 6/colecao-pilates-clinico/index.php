<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/colecao-pilates-clinico/");

// Modelo de Link 1
$regex = '/href="https:\/\/pay\.hotmart\.com\/W4618616C\?off=i8ce08ac\&\#038\;checkoutMode=10"/i';
$troca = 'href="'.$link_pilates_clinico.'"';
$content = preg_replace($regex, $troca, $content);

// Modelo de Link 2
$regex = '/<a\sclass="et_pb_button\set_pb_custom_button_icon\set_pb_button_(\d+)\set_pb_bg_layout_light"\shref="https:\/\/go\.hotmart\.com\/R41881570B\?ap=764a"/i';

$troca = '<a class="et_pb_button et_pb_custom_button_icon et_pb_button_${1} et_pb_bg_layout_light" href="'.$link_pilates_clinico.'"';
$content = preg_replace($regex, $troca, $content);


// Links Imagens Livros
$regex = '/<a href="https:\/\/cursosvoll.com.br\/2021\/2\/wp-content\/uploads\//i';
$troca = '<a href="https://cursosvollpilates.com.br/1/wp-content/uploads/';
$content = preg_replace($regex, $troca, $content);


echo $content;
?>




