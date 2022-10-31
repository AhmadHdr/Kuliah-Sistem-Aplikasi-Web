<?php 
/*
 * Data Types
 */
// String
$nama = "Ahmad Haidar Abdullah";
$moto = 'Sebaik-baik manusia adalah yang paling bermanfaat bagi sesamanya';

// Numeric (int dan float)
$berat = 12.3; // float data type
$panjang = 20; // integer data type

// Boolean
$jawaban = true;
$jawaban_saya = false;

// Array
$mahasiswa = array("Haidar","Bayu","Yoga");

// NULL
$toples = NULL;

// Object
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();
?>