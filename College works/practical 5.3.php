<?php

function matrixMultiplication($matrix1, $matrix2) {
    $result = array();
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $result[$i][$j] = 0;
            for ($k = 0; $k < 3; $k++) {
                $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }
    return $result;
}


$matrix1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$matrix2 = array(
    array(9, 8, 7),
    array(6, 5, 4),
    array(3, 2, 1)
);

$resultMatrix = matrixMultiplication($matrix1, $matrix2);


for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matrix1[$i][$j] . " ";
    }
    echo "<br>";
}
echo"<H1> X </H1>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matrix2[$i][$j] . " ";
    }
    echo "<br>";
}


echo "<br><h4>Resultant Matrix: <br></h4>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $resultMatrix[$i][$j] . " " . " ";
    }
    echo "<br>";
}

?>
