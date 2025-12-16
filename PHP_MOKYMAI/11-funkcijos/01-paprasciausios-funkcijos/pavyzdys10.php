<?php

function informacija() {
    $vardas = "Ieva";
    $amzius = 24;
    echo "$vardas ($amzius m.) <br>";
}

function klaidinga() {
    echo $vardas;
}

informacija();
klaidinga();
