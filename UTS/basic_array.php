<?php 
// Array
$daftar_nama = array(
  'Ahmad',
  'Haidar',
  'Abdullah');
$daftar_harga = [1000, 2000, 3000];
$data_kelas = array("Kelas XII A",
                    30,
                    "Bu Yani");

echo $daftar_nama . "<br>";
echo $daftar_harga . "<br>";
print $data_kelas . "<br>";

print_r($daftar_nama);
echo '<br>';
print_r($daftar_harga);
echo '<br>';
print_r($data_kelas);
echo '<br><br>';
    
// Mengambil 1 nilai dalam array
echo "daftar_nama[0] = $daftar_nama[0] <br>";
echo "daftar_nama[1] = $daftar_nama[1] <br>";
echo "daftar_nama[2] = $daftar_nama[2] <br><br>";

// Mengubah nilai array
$daftar_nama = array(
  'Muhammad',
  'Hisyam',
  'Al-Faruq',
  'Hisyam'
);
$daftar_harga[0] = 1234;

print_r($daftar_nama);
echo '<br>';
echo "daftar_harga[0] = $daftar_harga[0]<br><br>";

// Method pada array
// shuffle, count, sort, array_unique, array_reverse
shuffle($daftar_nama);
print_r(shuffle($daftar_nama));
echo '<br>';
print_r($daftar_nama);
echo '<br>';

print_r(count($daftar_nama));
echo '<br>';

sort($daftar_nama);
print_r($daftar_nama);
echo '<br>';

print_r(array_unique($daftar_nama));
echo '<br>';

print_r(array_reverse($daftar_nama));
echo '<br><br>';


// Associative Array
$lufi = [
          "health" => 100,
          "damage" => 25,
          "skill" => "Gomu Gomu"
];
$bonus = [
          "defense" => 95,
          "agility" => 35
];

print_r($lufi);
echo '<br>';
echo 'lufi["health"] = ' . $lufi["health"];
echo '<br><br>';

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