<?php

function bubbleSort(&$arr) {
    $n = count($arr);

    for ($i = 0; $i < $n-1; $i++) {
    
        for ($j = 0; $j < $n-$i-1; $j++) {
        
            if ($arr[$j] > $arr[$j+1]) {
            
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
}

$array = array(64, 34, 25, 12, 22, 11, 90);

echo "Original Array: \n";
print_r($array);

bubbleSort($array);

echo "</br>";
echo "Sorted Array: \n";
print_r($array);

?>
