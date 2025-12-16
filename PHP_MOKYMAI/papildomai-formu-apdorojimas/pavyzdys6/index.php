<?php
    $vardasKlaida = $temaKlaida = $komentarasKlaida = "";
    $vardas = $tema = $komentaras = "";

    function testuotiIvedima($duomenys) {
        $duomenys = trim($duomenys);
        $duomenys = stripslashes($duomenys);
        $duomenys = htmlspecialchars($duomenys);
        return $duomenys;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["vardas"])) {
            $vardasKlaida = "nesuvestas vardas";
        } else {
            $vardas = testuotiIvedima($_POST['vardas']);
        }

        if (empty($_POST["tema"])) {
            $temaKlaida = "nesuvesta tema";
        } else {
            $tema = testuotiIvedima($_POST['tema']);
        }

        if (empty($_POST["komentaras"])) {
            $komentarasKlaida = "nesuvestas komentaras";
        } else {
            $komentaras = testuotiIvedima($_POST['komentaras']);
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="vardas" placeholder="Vardas"> <span class="klaida"><?php echo $vardasKlaida; ?></span> <br>
        <input type="text" name="tema" placeholder="Tema"> <span class="klaida"><?php echo $temaKlaida; ?></span>  <br>
        <input type="text" name="komentaras" placeholder="komentaras"> <span class="klaida"><?php echo $komentarasKlaida; ?></span> <br>
        <input type="submit" value="Siusti">
    </form>
    <?php
        echo "$vardas <br>"
        . "$tema <br>"
        . "$komentaras <br>";
    ?>
</body>
</html>
