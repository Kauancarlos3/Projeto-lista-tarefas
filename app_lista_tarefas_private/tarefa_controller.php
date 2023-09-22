<?php

    require_once "./app_lista_tarefas_private/tarefa.model.php";
    require_once "./app_lista_tarefas_private/conexao.php";
    require_once "./app_lista_tarefas_private/tarefas.service.php";

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaservice = new TarefaService($conexao, $tarefa);

    echo '<pre>';
    print_r($tarefaservice);
    echo '</pre>';

?>