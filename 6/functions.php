<?php

function mostrarConteudo($urlPagina){
    $url = "https://api-modelo-negocios.herokuapp.com/modelos/61040d865ace79001521730d";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    
    //ALTERAR URL PRINCIPAL
    $urlSite = "https://vollpilates.com.br/representantesvoll/".$urlPagina;
    $content = file_get_contents($urlSite);

    $regex = '/<a\shref="https:\/\/vollpilates\.com\.br\/representantesvoll\/afiliados/i';
    $troca = '<a href="https://'.$data['url'];
    $content = preg_replace($regex, $troca, $content);
    
    //ALTERAR WHATSAPP
    $regex = '/<a\starget="_blank"\shref="https:\/\/api\.whatsapp\.com\/send\?phone=553298397595&text=Contato\svia\ssite\sCursos\sVOLL\sPilates:\s"\sclass="img-icon-a\snofocus">/i';
    $troca = '<a target="_blank" href="'. $data['link_whatsapp'] .'" class="img-icon-a nofocus">';
    $content = preg_replace($regex, $troca, $content);
    
    $regex = '/href="https:\/\/api\.whatsapp\.com\/send\?phone=550000000000&#038;text=Contato%20via%20site%20Cursos%20VOLL%20Pilates:"/i';
    $troca = 'href="'. $data['link_whatsapp'] .'"';
    $content = preg_replace($regex, $troca, $content);

    $regex = '/\(00\)\s0000-0000/i';
    $troca = $data['numero_whatsapp'];
    $content = preg_replace($regex, $troca, $content);
    //FIM ALTERAR WHATSAPP
    
    //ALTERAR TAG
    $regex = "/<span\sclass='tag-unica'>TAG<\/span>/i";
    $troca = $data['pixel'];
    $content = preg_replace($regex, $troca, $content);
    
    
    // Banner BF
    $link_bf_avanc_patologias 		= $data['black_friday']['avanc_patologias'];
    $link_bf_pil_gestantes 			= $data['black_friday']['pil_gestantes'];
    $link_bf_gestao_pilates 		= $data['black_friday']['gestao_pilates'];
    $link_bf_pilates_escolioses 	= $data['black_friday']['pilates_escolioses'];
    $link_bf_alteracoes_pulmonares 	= $data['black_friday']['alteracoes_pulmonares'];
    $link_bf_metodo_hipopressivo 	= $data['black_friday']['metodo_hipopressivo'];
    $link_bf_pilates_pcd 			= $data['black_friday']['pilates_pcd'];
    $link_bf_mat_pilates 			= $data['black_friday']['mat_pilates'];
    $link_bf_todos_cursos 			= $data['black_friday']['todos_cursos'];

    if(	"vazio" == $link_bf_avanc_patologias && "vazio" == $link_bf_pil_gestantes && "vazio" == $link_bf_gestao_pilates && "vazio" == $link_bf_pilates_escolioses && "vazio" == $link_bf_alteracoes_pulmonares && "vazio" == $link_bf_metodo_hipopressivo && "vazio" == $link_bf_pilates_pcd && "vazio" == $link_bf_mat_pilates && "vazio" == $link_bf_todos_cursos ){
        $regex = '/<div\sid="banner-bf"/';
	    $troca = '<div id="banner-bf" style="display: none !important;"';
	    $content = preg_replace($regex, $troca, $content);
    }
    
    

    /********************************************** 
    *
    *       REMOVER CURSOS AUTOMATICAMENTE 
    *    
    ***********************************************/
    $regex = '/<!--remover-curso-->/i';
    
    $abreStyle = '<style>';
    $conteudoStyle = '';
    $fechaStyle = '</style>';
    
    $retirar = "vazio";
    //Cursos Presenciais
    if($data['cursos_presenciais']['espaco_vida_pilates'] == $retirar){
        $conteudoStyle .= '#post-224816{display:none!important;}';
    }
    if($data['cursos_presenciais']['suspension'] == $retirar){
        $conteudoStyle .= '#post-223170{display:none!important;}';
    }
    if($data['cursos_presenciais']['formacao_mit'] == $retirar){
        $conteudoStyle .= '#post-223604{display:none!important;}';
    }
    
    //Cursos Online
    if($data['cursos_online']['metodo_hipopressivo'] == $retirar){
        $conteudoStyle .= '#post-228409{display:none!important;}';
    }
    if($data['cursos_online']['curso_pos_covid'] == $retirar){
        $conteudoStyle .= '#post-228383{display:none!important;}';
    }
    if($data['cursos_online']['imersao_mat'] == $retirar){
        $conteudoStyle .= '#post-228343{display:none!important;}';
    }
    if($data['cursos_online']['clube_voll'] == $retirar){
        $conteudoStyle .= '#post-228312{display:none!important;}';
    }
    if($data['cursos_online']['pilates_avancado'] == $retirar){
        $conteudoStyle .= '#post-228269{display:none!important;}';
    }
    if($data['cursos_online']['avancado_patologias_norm'] == $retirar && $data['cursos_online']['avancado_patologias_ass'] == $retirar){
        $conteudoStyle .= '#post-227789{display:none!important;}';
    }
    if($data['cursos_online']['workshop_coluna'] == $retirar){
        $conteudoStyle .= '#post-226829{display:none!important;}';
    }
    if($data['cursos_online']['mat_pilates_fitness'] == $retirar){
        $conteudoStyle .= '#post-226418{display:none!important;}';
    }
    if($data['cursos_online']['imersao_movimento'] == $retirar){
        $conteudoStyle .= '#post-226165{display:none!important;}';
    }
    if($data['cursos_online']['pilates_kids'] == $retirar){
        $conteudoStyle .= '#post-226208{display:none!important;}';
    }
    if($data['cursos_online']['excelencia_coluna'] == $retirar){
        $conteudoStyle .= '#post-226021{display:none!important;}';
    }
    if($data['cursos_online']['curso_quadril'] == $retirar){
        $conteudoStyle .= '#post-225285{display:none!important;}';
    }
    if($data['cursos_online']['pil_e_func_idosos'] == $retirar){
        $conteudoStyle .= '#post-223427{display:none!important;}';
    }
    if($data['cursos_online']['voll_suspension'] == $retirar){
        $conteudoStyle .= '#post-224386{display:none!important;}';
    }
    if($data['cursos_online']['mit_online'] == $retirar){
        $conteudoStyle .= '#post-223213{display:none!important;}';
    }
    if($data['cursos_online']['avaliacao_completa'] == $retirar){
        $conteudoStyle .= '#post-223168{display:none!important;}';
    }
    if($data['cursos_online']['aprimoramento_online'] == $retirar){
        $conteudoStyle .= '#post-224696{display:none!important;}';
    }
    if($data['cursos_online']['terapia_manual'] == $retirar){
        $conteudoStyle .= '#post-15574{display:none!important;}';
    }
    if($data['cursos_online']['habilidade_crp'] == $retirar){
        $conteudoStyle .= '#post-228631{display:none!important;}';
    }

    // VOLL Fisioterapia
    if($data['voll_fisioterapia']['treinamento_muscular'] == $retirar){
        $conteudoStyle .= '#post-227015{display:none!important;}';
    }
    if($data['voll_fisioterapia']['coluna_vertebral'] == $retirar){
        $conteudoStyle .= '#post-227487{display:none!important;}';
    }
    if($data['voll_fisioterapia']['mobilizacao_neural'] == $retirar){
        $conteudoStyle .= '#post-227004{display:none!important;}';
    }
    if($data['voll_fisioterapia']['kettlebell'] == $retirar){
        $conteudoStyle .= '#post-226999{display:none!important;}';
    }
    if($data['voll_fisioterapia']['fisioterapia_hemodialise'] == $retirar){
        $conteudoStyle .= '#post-226992{display:none!important;}';
    }
    if($data['voll_fisioterapia']['cancer_mama'] == $retirar){
        $conteudoStyle .= '#post-226988{display:none!important;}';
    }
    if($data['voll_fisioterapia']['avaliacao_postural'] == $retirar){
        $conteudoStyle .= '#post-226981{display:none!important;}';
    }
    
    // VOLL Educação Física
    if($data['voll_educacao_fisica']['exerc_grupos_especiais'] == $retirar){
        $conteudoStyle .= '#post-228651{display:none!important;}';
    }
    if($data['voll_educacao_fisica']['neuro_desempenho_esportivo'] == $retirar){
        $conteudoStyle .= '#post-228657{display:none!important;}';
    }

    
    // Eventos
    if($data['eventos']['pilates_legend'] == $retirar){
        $conteudoStyle .= '#menu-item-226882{display:none!important;}';
    }
    
    // Livros Digitais
    if($data['livros_digitais']['coletanea_patologias'] == $retirar){
        $conteudoStyle .= '#post-225724{display:none!important;}';
    }
    if($data['livros_digitais']['colecao_clinico'] == $retirar){
        $conteudoStyle .= '#post-225624{display:none!important;}';
    }
    if($data['livros_digitais']['pilates_equipamentos'] == $retirar){
        $conteudoStyle .= '#post-225518{display:none!important;}';
    }
    if($data['livros_digitais']['mat_pilates400'] == $retirar){
        $conteudoStyle .= '#post-225384{display:none!important;}';
    }
    if($data['livros_digitais']['fisio_gerontologica'] == $retirar){
        $conteudoStyle .= '#post-228662{display:none!important;}';
    }
    
    // Gerenciador
    if($data['gerenciador']['sistema_pilates'] == $retirar){
        $conteudoStyle .= '#post-224545{display:none!important;}';
    }
    if($data['gerenciador']['integra_fisio'] == $retirar){
        $conteudoStyle .= '#post-228640{display:none!important;}';
    }
    if($data['gerenciador']['integra_educ_fisio'] == $retirar){
        $conteudoStyle .= '#post-228644{display:none!important;}';
    }
    
    // AO VIVO
    if($data['black_friday']['avanc_patologias'] == $retirar){
        $conteudoStyle .= '#post-228740{display:none!important;}';
    }
    if($data['black_friday']['pil_gestantes'] == $retirar){
        $conteudoStyle .= '#post-228744{display:none!important;}';
    }
    if($data['black_friday']['gestao_pilates'] == $retirar){
        $conteudoStyle .= '#post-228747{display:none!important;}';
    }
    if($data['black_friday']['pilates_escolioses'] == $retirar){
        $conteudoStyle .= '#post-228750{display:none!important;}';
    }
    if($data['black_friday']['alteracoes_pulmonares'] == $retirar){
        $conteudoStyle .= '#post-228751{display:none!important;}';
    }
    if($data['black_friday']['metodo_hipopressivo'] == $retirar){
        $conteudoStyle .= '#post-228752{display:none!important;}';
    }
    if($data['black_friday']['pilates_pcd'] == $retirar){
        $conteudoStyle .= '#post-228759{display:none!important;}';
    }
    if($data['black_friday']['mat_pilates'] == $retirar){
        $conteudoStyle .= '#post-228760{display:none!important;}';
    }
    if($data['black_friday']['todos_cursos'] == $retirar){
        $conteudoStyle .= '#post-228761{display:none!important;}';
    }
    
    // Se todos os cursos não tiverem links, some a section da home e do menu
    if( ($data['black_friday']['avanc_patologias'] == $retirar) && 
        ($data['black_friday']['pil_gestantes'] == $retirar) && 
        ($data['black_friday']['gestao_pilates'] == $retirar) &&
        ($data['black_friday']['pilates_escolioses'] == $retirar) && 
        ($data['black_friday']['alteracoes_pulmonares'] == $retirar) && 
        ($data['black_friday']['metodo_hipopressivo'] == $retirar) &&
        ($data['black_friday']['pilates_pcd'] == $retirar) && 
        ($data['black_friday']['mat_pilates'] == $retirar) && 
        ($data['black_friday']['todos_cursos'] == $retirar)  ){
            
        $conteudoStyle .= '#ao-vivo-2022{display:none!important;} #menu-item-228815{display:none!important;}';
    }


    
    $troca = $abreStyle . $conteudoStyle . $fechaStyle;
    $content = preg_replace($regex, $troca, $content);
    
    return $content;
}



?>