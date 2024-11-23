<?php

function bubbleSort($lista) {
    $result = $lista;
    $lengh = count($result);

    if ($lengh <= 1) {
        return $lista;
    }

    for ($i = 0; $i < $lengh - 1; $i++) {
        for ($j = 0; $j < $lengh - $i - 1; $j++) {
            if ($result[$j] < $result[$j + 1]) { // Comparación para orden descendente
                // Intercambio
                $temp = $result[$j];
                $result[$j] = $result[$j + 1];
                $result[$j + 1] = $temp;
            }
        }
    }

    return $result;
}

// Lista numeros deordenados
$numeros = [3, -2, 7, 1, 3, 5, -10];

echo "Lista original: " . implode(", ", $numeros) . "<br>";

$sort = bubbleSort($numeros);
echo "Lista ordenada: " . implode(", ", $sort);

?>
