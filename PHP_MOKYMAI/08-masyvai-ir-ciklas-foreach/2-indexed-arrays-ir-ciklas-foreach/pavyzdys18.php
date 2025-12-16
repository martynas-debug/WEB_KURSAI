<?php
    $pirkiniai = array("pienas", "mesa", "grietine");
?>

<h1>Pirkiniai</h1>

<ol>
    <?php
        foreach ($pirkiniai as $preke) {
            echo "<li>$preke</li>";
        }
    ?>
</ol>
