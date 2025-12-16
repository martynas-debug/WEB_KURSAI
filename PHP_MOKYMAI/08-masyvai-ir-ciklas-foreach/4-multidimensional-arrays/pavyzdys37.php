<?php

$straipsniai = array(
    array("pavadinimas" => "Curabitur mattis diam",
        "tekstas" => "Morbi nulla nisl, tempor nec ante sed, iaculis bibendum ex. Cras nibh mauris, fringilla eu nibh nec",
        "autorius" => "Praesent congue",
        "data" => "2018-04-12"
    ),
    array("pavadinimas" => "Mauris blandit neque at augue",
        "tekstas" => "gravida laoreet, turpis leo tempor nisi, eu convallis eros nisi sed lacus. Nulla vitae sollicitudin urna, placerat dignissim erat. Maecenas magna ligula, lobortis id volutpat ",
        "autorius" => "Aliquam hendrerit ",
        "data" => "2018-07-14"
    ),
    array("pavadinimas" => "Morbi vestibulu",
        "tekstas" => "Donec id lorem ex. Morbi velit lacus, blandit in scelerisque sit amet",
        "autorius" => "Aenean sed dolor",
        "data" => "2018-08-07"
    ),
    array("pavadinimas" => "Neque at augue pharetra",
        "tekstas" => "Vestibulum ultrices eros non velit euismod volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos",
        "autorius" => "Praesent congue",
        "data" => "2018-10-23"
    )
);

if (count($straipsniai) > 0) {
    foreach ($straipsniai as $straipsnis) {
        echo "<article>";
        echo "<h3>".$straipsnis['pavadinimas']."</h3>";
        echo "<p>Parase: ".$straipsnis['autorius'].". Paskelbta ".$straipsnis['data']."</p>";
        echo "<p>".$straipsnis['tekstas']."</p>";
        echo "</article>";
        echo "<hr>";
    }
} else {
    echo "nera straipsniu";
}
