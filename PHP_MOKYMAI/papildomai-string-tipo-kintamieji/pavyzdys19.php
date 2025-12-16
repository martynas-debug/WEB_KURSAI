<?php

 /* explode(separator, string, limit) */

$str = 'one,two,three,four';

// zero limit
print_r(explode(',', $str, 0));
echo "<br>";

// positive limit
print_r(explode(',', $str, 2));
echo "<br>";

// negative limit
print_r(explode(',', $str, -1));
