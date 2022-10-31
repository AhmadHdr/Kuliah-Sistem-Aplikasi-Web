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


?>