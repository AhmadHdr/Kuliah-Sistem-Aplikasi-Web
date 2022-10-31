<?php 
$mahasiswa = array(
    array('Haidar','Bayu','Yoga','Yunisa','Mespin','Ahzul')
);

$size = count($mahasiswa);

for($i = 0; $i < $size; $i++) {
    echo $mahasiswa[$i] . '<br>';
}
?>