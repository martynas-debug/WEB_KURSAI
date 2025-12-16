<?php

date_default_timezone_set("Europe/Vilnius");
echo "Vilniaus laikas yra " . date("H:i:s") . "<br>";
date_default_timezone_set("Europe/London");
echo "Londono laikas yra " . date("H:i:s");
