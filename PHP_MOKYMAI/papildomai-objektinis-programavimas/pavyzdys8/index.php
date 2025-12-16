<?php

include "parduotuve.php";


$parduotuve = new Parduotuve("Maxima", array(
    new Preke("Piestukas", 0.3, 0.6, "QWE45FH"),
    new Preke("Flomasteris", 0.7, 1, "HSGH5454"),
    new Preke("Sasiuvinys", 0.15, 0.29, "JBJBJB54"),
    new Preke("Augalas", 1, 5.99, "Augla8877"),
    new Preke("Gerimas", 0.1, 0.89, "HGVG578")
));

$parduotuve->Isvedimas();
