<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="text" name="vardasInput" placeholder="Vardas"> <br>
        <input type="text" name="pavardeInput" placeholder="Pavarde"> <br>
        <input type="number" name="amziusInput" placeholder="Amzius"> <br>
        <input type="submit" value="Siusti">
    </form>
    <?php
        if (isset($_GET['vardasInput']) && isset($_GET['pavardeInput']) && isset($_GET['amziusInput'])) {
            $vardas     = $_GET['vardasInput'];
            $pavarde    = $_GET['pavardeInput'];
            $amzius     = $_GET['amziusInput'];

            echo "pries tai suvesti duomenys <br>"
            . "vardas: $vardas <br>"
            . "pavarde: $pavarde <br>"
            . "amzius: $amzius <br>";
        }
    ?>
</body>
</html>
