<?php
require_once("../functions.php");
require_once("../links_globais.php");

// Data que vem da página Links Globais
$link_todos_os_cursos_ao_vivo = $data['black_friday']['todos_cursos'];

$content = mostrarConteudo("afiliados/todos-os-cursos-ao-vivo/");

$regex = '/<div\sclass="et_pb_text_inner">nothing<\/div>/i';
$troca = '<script>window.location.href="'.$link_todos_os_cursos_ao_vivo.'"</script>';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>
