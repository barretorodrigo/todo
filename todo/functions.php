<?php

include 'dbconn.php';

function listTask($conn){
    $sql    = "SELECT id, titulo, descricao, data, status FROM tarefas";
    $result = $conn->query($sql);
}