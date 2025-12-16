<?php

$auto = array("bmw", "audi", "opel", "mercedes", "citroen");
$kiekis = count($auto) - 1;

$atsitiktIndeksas = rand(0, $kiekis);
$auto1 = $auto[$atsitiktIndeksas];

$auto2 = $auto[rand(0, $kiekis)];

echo "Du atsitikniai auto: ";

?>

<ul>
    <li><?php echo "$auto1"; ?></li>
    <li><?php echo "$auto2"; ?></li>
</ul>
