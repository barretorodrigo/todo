<?php

function formatDate($date){
    $objDate = new DateTime($date);
    return $objDate->format('d/m/Y');
}