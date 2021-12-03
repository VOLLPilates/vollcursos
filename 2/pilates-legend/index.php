<?php
require_once("../functions.php");
require_once("../links_globais.php");

$urlSite = "https://pilateslegend.com.br";
$content = file_get_contents($urlSite);

$css = "<style> #form-oficial { display: none !important; } #form-representante { display: block !important; }</style>";
    
// Troca FORM
$regex = '/<div id="form-representante" class="et_pb_module et_pb_code et_pb_code_2">\s\s\s\s\s\s\s\s\s\s\s\s\s\s\s\s\s\s\s<\/div>/';
$troca = '<div id="form-representante" class="et_pb_module et_pb_code et_pb_code_2">'.$css.$form_pilates_legend.'</div>';

$content = preg_replace($regex, $troca, $content);

echo $content;
?>




