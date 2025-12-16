<?php

$eilutes = $stulpeliai = 0;

function testuotiIvedima($duomenys) {
    $duomenys = trim($duomenys);
    $duomenys = stripslashes($duomenys);
    $duomenys = htmlspecialchars($duomenys);
    return $duomenys;
}

function SpausdintiLentele($eilutes, $stulpeliai) {
    echo '<br><table border="1">';
    for ($i = 0; $i < $stulpeliai; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $stulpeliai; $j++) {
            echo "<td>" . rand(1, 100) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!isset($_GET["eilutes"])) {
        echo "nesuvestos eilutes";
    } else {
        $eilutes = testuotiIvedima($_GET['eilutes']);
    }

    if (!isset($_GET["stulpeliai"])) {
        echo "nesuvesti stulpeliai";
    } else {
        $stulpeliai = testuotiIvedima($_GET['stulpeliai']);
    }
}

if (!isset($_GET["eilutes"]) || !isset($_GET["stulpeliai"])) {
    echo "Ivyko klaida<br>";
} else {
    spausdintiLentele($eilutes, $stulpeliai);
}

echo '<br><a href="index.php">Grizti</a>';
