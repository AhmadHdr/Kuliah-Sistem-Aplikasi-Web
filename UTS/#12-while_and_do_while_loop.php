<?php
// While Loop
// loops through a block of code as long as the condition specified evaluates to true.
$i = 1;
while($i <= 3){
    $i++;
    echo "The number is " . $i . "<br>";
}

// Do While
// the block of code executed once and then condition is evaluated. If the 
// condition is true the statement is repeated as long as the specified condition is true.
do{
    $i++;
    echo "The number is " . $i . "<br>";
}
while($i <= 3);
?>