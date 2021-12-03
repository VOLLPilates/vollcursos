<?php 
    $url = "https://api-modelo-negocios.herokuapp.com/modelos/61040db55ace790015217310";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    
    
    // Cursos Presenciais
    $form_espaco_vida_pilates = $data['cursos_presenciais']['espaco_vida_pilates'];
    $form_suspension = $data['cursos_presenciais']['suspension'];
    $form_mit = $data['cursos_presenciais']['formacao_mit'];
    

    // Cursos Online
    $link_metodo_hipopressivo = $data['cursos_online']['metodo_hipopressivo'];
    $link_curso_pos_covid = $data['cursos_online']['curso_pos_covid'];
    $link_imersao_mat_pilates = $data['cursos_online']['imersao_mat'];
    $link_mat_formacao = $data['cursos_online']['formacao_mat'];
    $link_clube_voll = $data['cursos_online']['clube_voll'];
    $link_pilates_avancado = $data['cursos_online']['pilates_avancado'];
    $link_avancado_patologias_normal = $data['cursos_online']['avancado_patologias_norm'];
    $link_avancado_patologias_assinatura = $data['cursos_online']['avancado_patologias_ass'];
    $link_workshop_coluna = $data['cursos_online']['workshop_coluna'];
    $link_mat_fitness = $data['cursos_online']['mat_pilates_fitness'];
    $link_imersao_movimento = $data['cursos_online']['imersao_movimento'];
    $link_pilates_kids = $data['cursos_online']['pilates_kids'];
    $link_certificao_coluna = $data['cursos_online']['excelencia_coluna'];
    $link_curso_quadril = $data['cursos_online']['curso_quadril'];
    $link_pilates_idosos = $data['cursos_online']['pil_e_func_idosos'];
    $link_voll_suspension = $data['cursos_online']['voll_suspension'];
    $link_mit = $data['cursos_online']['mit_online'];
    $link_avaliacao_completo = $data['cursos_online']['avaliacao_completa'];
    $link_aprimoramento = $data['cursos_online']['aprimoramento_online'];
    $link_terapia_manual = $data['cursos_online']['terapia_manual'];


    // Livros Digital
    $link_coletanea_patologias = $data['livros_digitais']['coletanea_patologias'];
    $link_pilates_clinico = $data['livros_digitais']['colecao_clinico'];
    $link_pilates_equipamentos = $data['livros_digitais']['pilates_equipamentos'];
    $link_mat_400 = $data['livros_digitais']['mat_pilates400'];

    // Eventos
    $form_pilates_legend = $data['eventos']['pilates_legend'];
    
    // VOLL Fisioterapia
    $link_treinamento_muscular = $data['voll_fisioterapia']['treinamento_muscular'];
    $link_coluna_vertebral = $data['voll_fisioterapia']['coluna_vertebral'];
    $link_mobilizacao_neural = $data['voll_fisioterapia']['mobilizacao_neural'];
    $link_kettlebell = $data['voll_fisioterapia']['kettlebell'];
    $link_hemodialise = $data['voll_fisioterapia']['fisioterapia_hemodialise'];
    $link_cancer_mama = $data['voll_fisioterapia']['cancer_mama'];
    $link_avaliacao_postural = $data['voll_fisioterapia']['avaliacao_postural'];
    
    // Sistemas
    $link_sistema_pilates = $data['gerenciador']['sistema_pilates'];


?>