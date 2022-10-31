<?php 
// https://www.php.net/manual/en/language.types.string.php
// https://www.php.net/manual/en/ref.strings.php

$str = "Hello world!";

echo "<br>str_split($str) = "; 
print_r( str_split($str));
echo "<br>str_repeat($str,3) = ", str_repeat($str,3);

// Encode the string
$encodeString = convert_uuencode($str);
echo "<br>", $encodeString;

// Decode the string
$decodeString = convert_uudecode($encodeString);
echo "<br>", $decodeString;

?>