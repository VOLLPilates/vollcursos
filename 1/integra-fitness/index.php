<?php

require_once("../functions.php");
require_once("../links_globais.php");

// Data que vem da página Links Globais
$link_integra_educ_fisio = $data['gerenciador']['integra_educ_fisio'];

// Conteúdo da Página
$urlSite = "https://www.integrafitness.com.br/vendas";
$content = file_get_contents($urlSite);
    
// Altera Link
$regex = '/href="https:\/\/pay\.hotmart\.com\/F58975495D"/';
$troca = 'href="'. $link_integra_educ_fisio .'"';
$content = preg_replace($regex, $troca, $content);

echo $content;

?>