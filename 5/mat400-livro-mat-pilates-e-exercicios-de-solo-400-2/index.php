<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/mat400-livro-mat-pilates-e-exercicios-de-solo-400-2/");

// Modelo de Link 1
$regex = '/<a\sclass="et_pb_button\set_pb_custom_button_icon\set_pb_button_(\d+)\set_pb_bg_layout_light"\shref="https:\/\/payment\.hotmart\.com\/H4443214A\?off=jfocnz1i\&\#038\;checkoutMode=10"/i';
$troca = '<a class="et_pb_button et_pb_custom_button_icon et_pb_button_${1} et_pb_bg_layout_light" href="'.$link_mat_400.'"';
$content = preg_replace($regex, $troca, $content);

// Links Imagens Livros
$regex = '/<a href="https:\/\/cursosvoll.com.br\/2021\/2\/wp-content\/uploads\//i';
$troca = '<a href="https://cursosvollpilates.com.br/1/wp-content/uploads/';
$content = preg_replace($regex, $troca, $content);

echo $content;
?>




