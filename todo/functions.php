<?php

function formatDate($date){
    $objDate = new DateTime($date);
    return $objDate->format('d/m/Y');
}

function calcDone($conn){
    $sqlTotal = "SELECT * FROM tarefas";
    $sqlFeita = "SELECT * FROM tarefas WHERE status=1";
    $restulTotal = $conn->query($sqlTotal);
    $restulFeita = $conn->query($sqlFeita);

    $mensagem = $restulFeita->num_rows . "/" . $restulTotal->num_rows;
    return $mensagem;
}

function calcPercent($conn){
    $sqlTotal = "SELECT * FROM tarefas";
    $sqlFeita = "SELECT * FROM tarefas WHERE status=1";
    $restulTotal = $conn->query($sqlTotal);
    $restulFeita = $conn->query($sqlFeita);

    $number = ($restulFeita->num_rows / $restulTotal->num_rows)*100;
    return number_format($number, 2, ',', ' ') . "%";
}

function calcLatter($conn){
    $hoje = date('Y-m-d');
    $sqlLatter = "SELECT * FROM tarefas WHERE data < '$hoje'";
    $result = $conn->query($sqlLatter);
    return $result->num_rows;
}