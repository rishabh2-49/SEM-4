<?php

$string = "Hello, world!";
$length = 0;

// Iterate through each character of the string
for ($i = 0; isset($string[$i]); $i++) {
    // Increment the length counter
    $length++;
}

// Output the length of the string
echo "The length of the string is: " . $length;

?>
