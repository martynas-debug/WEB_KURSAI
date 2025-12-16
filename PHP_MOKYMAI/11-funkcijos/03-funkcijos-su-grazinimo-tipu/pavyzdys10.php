<?php

function sakinys($vardas, $pavarde, $amzius, $profesija) {
    $formatuotasSakinys = "$vardas $pavarde ($amzius m.) dirba $profesija";
    return $formatuotasSakinys;
}

$pirmas = sakinys("Tomas", "Tomauskas", 24, "policininku");
$antras = sakinys("Paulius", "Paulinskas", 21, "gaisrininku");

echo "$pirmas <br>";
echo "$antras <br>";
