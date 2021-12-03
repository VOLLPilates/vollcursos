<?php

require_once("../functions.php");
require_once("../links_globais.php");

// Data que vem da página Links Globais
$link_integra_fisio = $data['gerenciador']['integra_fisio'];

// Conteúdo da Página
$urlSite = "https://www.integrafisio.com.br/vendas";
$content = file_get_contents($urlSite);
    
// Altera Link
$regex = '/href="https:\/\/pay\.hotmart\.com\/G58974290M"/i';
$troca = 'href="'. $link_integra_fisio .'"';
$content = preg_replace($regex, $troca, $content);

echo $content;

?>