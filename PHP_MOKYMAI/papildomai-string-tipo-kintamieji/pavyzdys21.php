<?php

$zodziai = array('sunys', 'gali', 'pavojingai', 'aplaizyti');
echo implode(" ", $zodziai) . "<br>";
echo implode("+", $zodziai) . "<br>";
echo implode("-", $zodziai) . "<br>";
echo implode("X", $zodziai);
