<?php

require_once("../functions.php");
require_once("../links_globais.php");

// Data que vem da página Links Globais
$link_exerc_grupos_especiais = $data['voll_educacao_fisica']['exerc_grupos_especiais'];

// Conteúdo da Página
$urlSite = "https://www.volleducacaofisica.com.br/exercicio-fisico-para-grupos-especiais/";
$content = file_get_contents($urlSite);
    
// Altera Link
$regex = '/href="https:\/\/pay\.hotmart\.com\/R18129415G\?off=f6o0jdmw"/i';
$troca = 'href="'. $link_exerc_grupos_especiais .'"';
$content = preg_replace($regex, $troca, $content);

echo $content;

?>