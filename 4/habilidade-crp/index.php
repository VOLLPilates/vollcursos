<?php

require_once("../functions.php");
require_once("../links_globais.php");

// Data que vem da página Links Globais
$link_habilidade_crp = $data['cursos_online']['habilidade_crp'];

// Conteúdo da Página
$urlSite = "https://www.habilidadecrp.com.br/";
$content = file_get_contents($urlSite);
    
// Altera Link
$regex = '/href="https:\/\/pay\.hotmart\.com\/X60989414S\?off=tg985ie7&#038;checkoutMode=10"/';
$troca = 'href="'. $link_habilidade_crp .'"';
$content = preg_replace($regex, $troca, $content);

echo $content;

?>