<?php

    require_once "./app_lista_tarefas_private/tarefa.model.php";
    require_once "./app_lista_tarefas_private/conexao.php";
    require_once "./app_lista_tarefas_private/tarefas.service.php";


    $acao =  isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if($acao == 'inserir'){ 
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();

        $tarefaservice = new TarefaService($conexao, $tarefa);
        $tarefaservice->inserir();

        header('Location: nova_tarefa.php?inclusao=1');
    } else if($acao == 'recuperar'){
        echo 'chegamos aqui!';
    }

?>