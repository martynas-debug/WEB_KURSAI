<?php

// Susikurkite kelis kintamuosius saugoti pažymiams. Raskite šių pažymių
// vidurkį. Patikrinkite ar vidurkis teigiamas (daugiau arba lygu 5-iems), jei
// taip - išveskite “vidurkis teigiamas”.


$grade1 = 6;
$grade2 = 8;
$grade3 = 4;
$average = ($grade1 + $grade2 + $grade3) / 3;
if ($average >= 5) {
    echo "Vidurkis teigiamas.";
}


