<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/espaco-vida-pilates/");

$css = "<style> #form-oficial { display: none !important; } #form-representante { display: block !important; }</style>";
    
// Troca FORM
$regex = '/<div\sid="form-representante"\sclass="et_pb_module\set_pb_code\set_pb_code_(\d)">\s\s\s\s\s\s\s\s\s\s\s\s\s\s\s\s\s\s\s<\/div>/';
$replacement = '<div id="form-representante" class="et_pb_module et_pb_code et_pb_code_${1}">'.$css.$form_espaco_vida_pilates.'</div>';
$content =  preg_replace($regex, $replacement, $content);

$content = preg_replace($regex, $troca, $content);

echo $content;
?>




