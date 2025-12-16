<?php

/* substr_count(string, substring, start, length) */

$str = "This is nice";

// Using strlen() to return the string length
echo strlen($str) . "<br>";

// The number of times "is" occurs in the string
echo substr_count($str, "is") . "<br>";

// The string is now reduced to "is is nice"
echo substr_count($str, "is", 2) . "<br>";

// The string is now reduced to "s is nice"
echo substr_count($str, "is", 3) . "<br>";

// The string is now reduced to "s i"
echo substr_count($str, "is", 3, 3) . "<br>";
