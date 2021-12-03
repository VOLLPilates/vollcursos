<?php
require_once("../functions.php");
require_once("../links_globais.php");

$content = mostrarConteudo("afiliados/pilates-para-gestantes-e-baby-pilates/");

// Links 1
$regex = '/href="https:\/\/go\.hotmart\.com\/F41280929C\?ap=faae"/i';
$troca = 'href="'.$link_gestante_baby.'"';
$content = preg_replace($regex, $troca, $content);

// Links 2
$regex = '/href="https:\/\/pay\.hotmart\.com\/W12421496F\?off=frhtmv4q\&\#038\;checkoutMode=10"/i';
$troca = 'href="'.$link_gestante_baby.'"';
$content = preg_replace($regex, $troca, $content);

// Links 3
$regex = '/href="https:\/\/go\.hotmart\.com\/Q17490179Q\?dp=1"/i';
$troca = 'href="'.$link_gestante_baby.'"';
$content = preg_replace($regex, $troca, $content);

echo $content;
?>




