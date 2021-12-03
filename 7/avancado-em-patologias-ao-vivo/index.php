<?php
require_once("../functions.php");
require_once("../links_globais.php");

// Data que vem da página Links Globais
$link_avancado_em_patologias_ao_vivo = $data['black_friday']['avanc_patologias'];

$content = mostrarConteudo("afiliados/avancado-em-patologias-ao-vivo/");

$regex = '/<div\sclass="et_pb_text_inner">nothing<\/div>/i';
$troca = '<script>window.location.href="'.$link_avancado_em_patologias_ao_vivo.'"</script>';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>
