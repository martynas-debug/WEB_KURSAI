<?php

$zodziai = array('sunys', 'gali', 'pavojingai', 'aplaizyti');
$tekstas = implode(" ", $zodziai);

echo "masyvas: ";
print_r($zodziai);
echo "<br>suformuotas tekstas: $tekstas";
