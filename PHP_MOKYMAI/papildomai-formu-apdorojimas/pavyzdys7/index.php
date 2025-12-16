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
        <div>
            <label for="vardas">Vardas:</label>
            <input type="text" name="vardas" value="<?php echo $vardas; ?>" value="">
            <span class="klaida"><?php echo $vardasKlaida; ?></span>
            <br>
        </div>
        <div>
            <label for="tema">Tema:</label>
            <input type="text" name="tema" value="<?php echo $tema; ?>">
            <span class="klaida"><?php echo $temaKlaida; ?></span>
            <br>
        </div>
        <div>
            <label for="komentaras">Komentaras:</label>
            <input type="text" name="komentaras" value="<?php echo $komentaras; ?>">
            <span class="klaida"><?php echo $komentarasKlaida; ?></span>
            <br>
        </div>
        <div>
            <input type="submit" value="Siusti">
        </div>
    </form>
</body>
</html>
