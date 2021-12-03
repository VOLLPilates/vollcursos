<?php

require_once("../functions.php");
require_once("../links_globais.php");

// Data que vem da página Links Globais
$link_neuro_desempenho_esportivo = $data['voll_educacao_fisica']['neuro_desempenho_esportivo'];

// Conteúdo da Página
$urlSite = "https://www.volleducacaofisica.com.br/neurociencia-e-desempenho-esportivo/";
$content = file_get_contents($urlSite);
    
// Altera Link
$regex = '/href="https:\/\/pay\.hotmart\.com\/D18129079C\?off=9wbu12t6"/i';
$troca = 'href="'. $link_neuro_desempenho_esportivo .'"';
$content = preg_replace($regex, $troca, $content);

echo $content;

?>