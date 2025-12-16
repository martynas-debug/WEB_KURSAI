<?php

$bilietas = true;

if ($bilietas == true) {
    echo "pirmas if <br>";
}

if ($bilietas) {
    echo "antras if <br>";
}

/* turima true kintamaji invertuojam i false su !,
o if veikimui salyga turi buti true, todel ji nesuveiks */
if (!$bilietas) {
    echo "trecias if <br>";
} else {
    echo "trecio if else dalis <br>";
}
