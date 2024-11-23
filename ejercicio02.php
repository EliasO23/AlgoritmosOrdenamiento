<?php

function mergeSort($list){
    if (count($list) <= 1) {
        return $list;
    }

    $middle = floor(count($list) /2);
    $left = array_slice($list, 0, $middle);
    $rigth = array_slice($list, $middle);

    $left = mergeSort($left);
    $rigth = mergeSort($rigth);

    return merge($left, $rigth);
}

function merge($left, $rigth) {
    $result = [];

    while (count($left) > 0 && count($rigth) > 0) {
        if (strcasecmp($left[0], $rigth[0]) <= 0) { 
            array_push($result, array_shift($left));
        } else {
            array_push($result, array_shift($rigth));
        }
    }

    while(count($left) > 0){
        array_push($result, array_shift($left));
    }

    while(count($rigth) > 0){
        array_push($result, array_shift($rigth));
    }

    return $result;
}

// Lista de palabras
$palabras = ["React", "Python", "Java", "C#", "Javascript", "php", "Typescript", "Next"];

echo "Lista original: " . implode(", ", $palabras) . "<br>";
$ordenada = mergeSort($palabras);
echo "Lista ordenada alfabéticamente: " . implode(", ", $ordenada);
?>
