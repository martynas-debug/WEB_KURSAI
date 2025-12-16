<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Puslapis</title>
        <style>
            html, body {
                margin: 0;
                padding: 0;
            }
            .navbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 1em;
                background: black;
            }
            .navbar a {
                color: white;
                text-decoration: none;
            }
            .navbar h1 {
                margin: 0;
            }
            .navbar ul {
                padding: 0;
                margin: 0;
            }
            .navbar ul li {
                display: inline-block;
                margin-left: 1em;
            }
            .articles {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
            }
            .articles article {
                width: 20%;
                background: orange;
                margin: 1em;
                padding: 1em;
            }
        </style>
    </head>
    <body>
        <div class="navbar">
            <h1><a href="#">Pavadinimas</a></h1>
            <ul>
                <?php
                    $kiek = rand(3, 7);
                    for ($i = 0; $i < $kiek; $i++) {
                        echo '<li><a href="#">Nuoroda</a></li>';
                    }
                ?>
            </ul>
        </div>
        <div class="articles">
            <?php
                $kiek = rand(5, 20);
                for ($i=0; $i < $kiek; $i++) {
                    ?>
                        <article>
                            <h2>Antraste</h2>
                            <p>Etiam et sodales dolor, quis mattis justo. Praesent sit amet dapibus felis. Suspendisse dapibus massa urna, eu sagittis turpis sodales eget. Nullam accumsan tempor hendrerit. Nunc ac dui hendrerit, varius nisl ac, commodo eros. Praesent quis aliquet lorem. Morbi dignissim pharetra nibh id semper. Nulla facilisis sem vel tellus accumsan iaculis. Fusce dictum vehicula mattis. Mauris euismod sapien sit amet ipsum ullamcorper, sed malesuada elit eleifend.</p>
                            <a href="#">placiau</a>
                        </article>
                    <?php
                }
            ?>
        </div>
    </body>
</html>



<?php

// UŽDUOTYS:

// - Prie straipsnių antraščių išveskite kelintas tai straipsnis. Pavyzdžiui:
// Antrase 1; Antraste 2...
// - Kiekviename straipsnyje išveskite skirtingus tekstus. Tekstai gali kartotis.
// - Sukurkite puslapio footer, kuriame išveskite atsitiktinį kiekį nuorodų.

