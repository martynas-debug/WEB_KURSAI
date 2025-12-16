<?php

// Išveskite norimo skaičiaus daugybos lentelę nuo 1 iki 10. Pavyzdžiui:
// 5 * 1 = 5
// 5 * 2 = 10
// ...
// 5 * 10 = 50

$number = 7; // Pasirinktas skaičius
for ($i = 1; $i <= 10; $i++) {
    $result = $number * $i;
    echo "$number * $i = $result\n";
}




