<?php

while (true) {
    $skaicius = rand(1, 100);
    echo "$skaicius <br>";

    if ($skaicius % 7 == 0 && $skaicius % 2 == 0) {
        echo "skaicius $skaicius dalinasi is 7 ir is 2";
        break;
    }
}
