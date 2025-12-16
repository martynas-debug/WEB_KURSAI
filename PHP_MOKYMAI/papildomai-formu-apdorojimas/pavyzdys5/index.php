<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="vardas" placeholder="Vardas"> <br>
        <input type="text" name="tema" placeholder="Tema"> <br>
        <input type="text" name="komentaras" placeholder="komentaras"> <br>
        <input type="submit" value="Siusti">
    </form>

    <?php
        $vardas = $tema = $komentaras = "";

        function testuotiIvedima($duomenys) {
            $duomenys = trim($duomenys);
            $duomenys = stripslashes($duomenys);
            $duomenys = htmlspecialchars($duomenys);
            return $duomenys;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty($_POST["vardas"])) {
                $vardas = "nesuvestas vardas";
            } else {
                $vardas = testuotiIvedima($_POST['vardas']);
            }

            if (empty($_POST["tema"])) {
                $tema = "nesuvesta tema";
            } else {
                $tema = testuotiIvedima($_POST['tema']);
            }

            if (empty($_POST["komentaras"])) {
                $komentaras = "nesuvestas komentaras";
            } else {
                $komentaras = testuotiIvedima($_POST['komentaras']);
            }

            echo "$vardas <br>"
                . "$tema <br>"
                . "$komentaras <br>";
        }
    ?>
</body>
</html>
