<?php

// Susikurkite skaičiui saugoti skirtą kintamąjį. Tikrinkite (naudojant visas if
// sąlygos dalis):
// 1. Ar skaičius yra lyginis?
// 2. Ar dalinasi iš 5?
// 3. Ar skaičius lygus 3?
// 4. Jeigu nieko nepavyko rasti, išveskite klaidos pranešimą.


$number = 10; // Čia galite pakeisti skaičių ir išbandyti įvairias sąlygas
if ($number % 2 == 0) {
    echo "Skaičius $number yra lyginis.";
} elseif ($number % 5 == 0) {
    echo "Skaičius $number dalinasi iš 5.";
} elseif ($number == 3) {
    echo "Skaičius yra lygus 3.";
} else {
    echo "Klaida: skaičius neatitinka jokių sąlygų.";
}


