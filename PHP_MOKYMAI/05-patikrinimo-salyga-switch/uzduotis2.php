<?php

// Susikurkite kintamąjį vartotojo rolei saugoti. Tikrinkite:
// 1. Ar rolė yra “vartotojas”?
// 2. Ar rolė yra “moderatorius”?
// 3. Ar rolė yra “administratorius”?
// 4. Jei nei vienas pasirinkimas netinka, išveskite klaidos pranešimą.



$role = "moderatorius"; // Čia galite pakeisti rolę ir išbandyti įvairias sąlygas
if ($role == "vartotojas") {
    echo "Jūs esate vartotojas.";
} elseif ($role == "moderatorius") {
    echo "Jūs esate moderatorius.";
} elseif ($role == "administratorius") {
    echo "Jūs esate administratorius.";
} else {
    echo "Klaida: neteisinga rolė.";
}



