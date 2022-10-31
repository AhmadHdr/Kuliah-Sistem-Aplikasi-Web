<?php 
// Associative Array Method
// array_keys, array_values, array_merge
$character = array_merge($lufi, $bonus);
print_r($character);
echo '<br>';
print_r(array_keys($lufi));
echo '<br>';
print_r(array_values($lufi));
echo '<br>';
var_dump($lufi);
echo '<br><br>';

// Array Multi Dimension
$data = [
  ['lufi', 'zoro', 'choper'],
  [10, 20, 30]
];
print_r($data);
echo '<br>';
print_r($data[0]);
echo '<br>';
print_r($data[1]);
echo '<br>';
echo $data[0][1];
echo '<br>';
echo $data[1][1];
echo '<br><br>';

// Superglobal variable
print_r($GLOBALS);
echo '<br><br>';
print_r($_SERVER);
echo '<br><br>';
print_r($_GET);
echo '<br><br>';
print_r($_POST);
echo '<br><br>';
print_r($_FILES);
echo '<br><br>';
print_r($_COOKIE);
echo '<br><br>';
print_r($_SESSION);
echo '<br><br>';
print_r($_REQUEST);
echo '<br><br>';
print_r($_ENV);
?>