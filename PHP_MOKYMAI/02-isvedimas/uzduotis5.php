<?php

// Susikurkite kintamąjį simboliui. Išveskite tuščiavidurį kvadratą iš šio
// simbolio. Pavyzdžiui, turite simbolį *, todėl išvedant gaunate:
// ****
// *  *
// *  *
// ****

$simbolis = "*";
$tarpas = "&nbsp";
echo $simbolis . $simbolis . $simbolis . $simbolis . "<br>";
echo $simbolis . $tarpas . $tarpas .$tarpas . $tarpas . $simbolis . "<br>";
echo "$simbolis &nbsp;&nbsp;&nbsp;$simbolis <br>";
echo $simbolis . $simbolis . $simbolis . $simbolis . "<br>";


