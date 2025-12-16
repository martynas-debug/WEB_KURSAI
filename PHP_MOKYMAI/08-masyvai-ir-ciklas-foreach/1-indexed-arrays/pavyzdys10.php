<?php

$stud1Paz = array(9, 8, 10, 6, 5, 7);
$stud2Paz = array(10, 10, 9, 8, 10);
$stud3Paz = array(4, 5, 8, 3, 4, 6);

$stud1Vid = ($stud1Paz[0] + $stud1Paz[1] + $stud1Paz[2]
+ $stud1Paz[3] + $stud1Paz[4] + $stud1Paz[5]) / count($stud1Paz);
$stud2Vid = ($stud2Paz[0] + $stud2Paz[1] + $stud2Paz[2]
+ $stud2Paz[3] + $stud2Paz[4]) / count($stud2Paz);
$stud3Vid = ($stud3Paz[0] + $stud3Paz[1] + $stud3Paz[2]
+ $stud3Paz[3] + $stud3Paz[4] + $stud3Paz[5]) / count($stud3Paz);

echo "pirmo studento pazymiai: ";
print_r($stud1Paz);
echo "<br>vidurkis: $stud1Vid <br><br>";

echo "antro studento pazymiai: ";
print_r($stud2Paz);
echo "<br>vidurkis: $stud2Vid <br><br>";

echo "trecio studento pazymiai: ";
print_r($stud3Paz);
echo "<br>vidurkis: $stud3Vid";
