<?php
require_once("../functions.php");
require_once("../links_globais.php");

// Data que vem da página Links Globais
$link_atualizacao_sobre_pilates_nas_escolioses_ao_vivo = $data['black_friday']['pilates_escolioses'];

$content = mostrarConteudo("afiliados/atualizacao-sobre-pilates-nas-escolioses-ao-vivo/");

$regex = '/<div\sclass="et_pb_text_inner">nothing<\/div>/i';
$troca = '<script>window.location.href="'.$link_atualizacao_sobre_pilates_nas_escolioses_ao_vivo.'"</script>';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>
