<?php

/*
This function returns:
    0 - if the two strings are equal
    < 0 - if string1 is less than string2
    > 0 - if string1 is greater than string2
*/

// the two strings are equal
echo strcmp("Hello world!", "Hello world!");
echo "<br>";

// string1 is greater than string2
echo strcmp("Hello world!", "Hello");
echo "<br>";

// string1 is less than string2
echo strcmp("Hello world!", "Hello world! Hello!");
echo "<br>";
