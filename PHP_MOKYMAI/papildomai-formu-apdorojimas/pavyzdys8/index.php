<?php
    $eilutesKlaida = $stulpeliaiKlaida = "";
    $eilutes = $stulpeliai = 0;

    function testuotiIvedima($duomenys) {
        $duomenys = trim($duomenys);
        $duomenys = stripslashes($duomenys);
        $duomenys = htmlspecialchars($duomenys);
        return $duomenys;
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (!isset($_GET["eilutes"])) {
            $eilutesKlaida = "nesuvestos eilutes";
        } else {
            $eilutes = testuotiIvedima($_GET['eilutes']);
        }

        if (!isset($_GET["stulpeliai"])) {
            $stulpeliaiKlaida = "nesuvesti stulpeliai";
        } else {
            $stulpeliai = testuotiIvedima($_GET['stulpeliai']);
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .klaida {
            color: red;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
        <div>
            <label for="eilutes">Eilutes:</label>
            <input type="number" name="eilutes" value="<?php echo $eilutes; ?>">
            <span class="klaida"><?php echo $eilutesKlaida; ?></span>
            <br>
        </div>
        <div>
            <label for="stulpeliai">Stulpeliai:</label>
            <input type="number" name="stulpeliai" value="<?php echo $stulpeliai; ?>">
            <span class="klaida"><?php echo $stulpeliaiKlaida; ?></span>
            <br>
        </div>
        <div>
            <input type="submit" value="Generuoti">
        </div>
    </form>

    <?php
        echo '<br><table border="1">';
        for ($i = 0; $i < $stulpeliai; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $stulpeliai; $j++) {
                echo "<td>" . rand(1, 100) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
