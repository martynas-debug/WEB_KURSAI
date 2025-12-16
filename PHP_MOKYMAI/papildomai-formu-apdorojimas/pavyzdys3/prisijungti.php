<?php

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "$username <br> $password <br>";
    if ($username == "useris" && $password == "slaptazodis") {
        echo "prisijungta sekmingai <br>";
    } else {
        echo "blogi prisijungimo duomenys <br>";
    }
} else {
    echo "nesuvesti duomenys <br>";
}

?>

<a href="index.php">Grizti</a>
