<?php
function insertionSort($nombres) {
    $lengh = count($nombres);

    if ($lengh <= 1) {
        return $nombres;
    }

    for ($i = 1; $i < $lengh; $i++) {
        $actual = $nombres[$i];

        $j = $i - 1;

        while ($j >= 0 && strcasecmp($nombres[$j], $actual) > 0) {
            $nombres[$j + 1] = $nombres[$j];
            $j--;
        }
        $nombres[$j + 1] = $actual;
    }
    return $nombres;
}

// Lista de nombres
$nombres = ["Jairo", "Carlos", "ana", "Ever", "Diego", "Elias", "Rafael", "Federico", "Marcela"];

echo "Lista original: " . implode(", ", $nombres) . "<br>";

$sort = insertionSort($nombres);
echo "Lista ordenada alfabéticamente: " . implode(", ", $sort);
?>
