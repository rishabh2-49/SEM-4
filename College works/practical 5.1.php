<?php

$string = "Hello, world!";
$length = 0;

for ($i = 0; isset($string[$i]); $i++) {
    // Increment the length counter
    $length++;
}

echo "The length of the string is: " . $length;

?>
