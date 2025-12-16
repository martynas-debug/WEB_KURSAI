<?php

$data = mktime(11, 14, 54, 8, 12, 2014);
echo "Sukurta data yra " . date("Y-m-d h:i:sa", $data) . "<br>";

$data2 = mktime(10, 15, 12, 10, 7, 2018);
echo "sukurta data yra " . date("Y-m-d H:i:s", $data2);
