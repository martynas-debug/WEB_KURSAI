<?php

// Susikurkite reikiamus kintamuosius. Išveskite nurodytą tekstą, kuriame
// tarp skliaustų { ir } įterpkite šių kintamųjų reikšmes. Tekstas išvedimui:
// Studentas {vardas} {pavardė} ({amžius} m.) mokosi {mokykla}, dabar yra
// {kursas} kurse. Iki šiol surinko kreditų {kreditai}. Studento studijų vidurkis
// {vidurkis}.


$vardas = "Jonas";
$pavarde = "Jonaitis";
$amzius = 21;
$mokykla = "Vilniaus Universitetas";
$kursas = 3;
$kreditai = 120;
$vidurkis = 8.5;
echo "Studentas {$vardas} {$pavarde} ({$amzius} m.) mokosi {$mokykla}, dabar yra {$kursas} kurse. Iki šiol surinko kreditų {$kreditai}. Studento studijų vidurkis {$vidurkis}.";


