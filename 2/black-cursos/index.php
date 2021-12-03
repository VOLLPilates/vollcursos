<?php

require_once("../functions.php");
require_once("../links_globais.php");

// Data que vem da página Links Globais
$link_bf_avanc_patologias 		= $data['black_friday']['avanc_patologias'];
$link_bf_pil_gestantes 			= $data['black_friday']['pil_gestantes'];
$link_bf_gestao_pilates 		= $data['black_friday']['gestao_pilates'];
$link_bf_pilates_escolioses 	= $data['black_friday']['pilates_escolioses'];
$link_bf_alteracoes_pulmonares 	= $data['black_friday']['alteracoes_pulmonares'];
$link_bf_metodo_hipopressivo 	= $data['black_friday']['metodo_hipopressivo'];
$link_bf_pilates_pcd 			= $data['black_friday']['pilates_pcd'];
$link_bf_mat_pilates 			= $data['black_friday']['mat_pilates'];
$link_bf_todos_cursos 			= $data['black_friday']['todos_cursos'];
         

// Conteúdo da Página
$urlSite = "https://www.habilidadecrp.com.br/black-mn/";
$content = file_get_contents($urlSite);
    
// Troca Link 01
$regex = '/href="https:\/\/grupovoll\.com\.br\/1"/';
$troca = 'href="'.$link_bf_avanc_patologias.'"';
$content = preg_replace($regex, $troca, $content);

// Troca Link 02
$regex = '/href="https:\/\/grupovoll\.com\.br\/2"/';
$troca = 'href="'.$link_bf_pil_gestantes.'"';
$content = preg_replace($regex, $troca, $content);

// Troca Link 03
$regex = '/href="https:\/\/grupovoll\.com\.br\/3"/';
$troca = 'href="'.$link_bf_gestao_pilates.'"';
$content = preg_replace($regex, $troca, $content);

// Troca Link 04
$regex = '/href="https:\/\/grupovoll\.com\.br\/4"/';
$troca = 'href="'.$link_bf_pilates_escolioses.'"';
$content = preg_replace($regex, $troca, $content);

// Troca Link 05
$regex = '/href="https:\/\/grupovoll\.com\.br\/5"/';
$troca = 'href="'.$link_bf_alteracoes_pulmonares.'"';
$content = preg_replace($regex, $troca, $content);

// Troca Link 06
$regex = '/href="https:\/\/grupovoll\.com\.br\/6"/';
$troca = 'href="'.$link_bf_metodo_hipopressivo.'"';
$content = preg_replace($regex, $troca, $content);

// Troca Link 07
$regex = '/href="https:\/\/grupovoll\.com\.br\/7"/';
$troca = 'href="'.$link_bf_pilates_pcd.'"';
$content = preg_replace($regex, $troca, $content);

// Troca Link 08
$regex = '/href="https:\/\/grupovoll\.com\.br\/8"/';
$troca = 'href="'.$link_bf_mat_pilates.'"';
$content = preg_replace($regex, $troca, $content);

// Troca Link 09
$regex = '/href="https:\/\/grupovoll\.com\.br\/9"/';
$troca = 'href="'.$link_bf_todos_cursos.'"';
$content = preg_replace($regex, $troca, $content);

echo $content;
    
?>