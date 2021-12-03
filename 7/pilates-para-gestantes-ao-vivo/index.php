<?php
require_once("../functions.php");
require_once("../links_globais.php");

// Data que vem da página Links Globais
$link_pilates_para_gestantes_ao_vivo = $data['black_friday']['pil_gestantes'];

$content = mostrarConteudo("afiliados/pilates-para-gestantes-ao-vivo/");

$regex = '/<div\sclass="et_pb_text_inner">nothing<\/div>/i';
$troca = '<script>window.location.href="'.$link_pilates_para_gestantes_ao_vivo.'"</script>';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>
