<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/curso-pos-covid/");

$regex = '/<div\sclass="et_pb_text_inner">nothing<\/div>/i';
$troca = '<script>window.location.href="'.$link_curso_pos_covid.'"</script>';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>
