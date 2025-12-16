<?php

for ($i = 1; $i < 5; $i++) {
    if ($i == 2) {
        // nebevykdo nieko kas zemiau,
        // nes grizta i ciklo pradzia
        continue;
    }
    echo "$i <br>";
}
