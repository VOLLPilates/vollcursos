<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/e-book-fisioterapia-gerontologica/");

$regex = '/<div\sclass="et_pb_text_inner">nothing<\/div>/i';
$troca = '<script>window.location.href="'.$data['livros_digitais']['fisio_gerontologica'].'"</script>';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>
