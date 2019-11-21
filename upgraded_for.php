<?php
$lijst = array(
    "imad",
    "mo",
    "kenza",
    "laurens",
    "aimane",
    "izdine",
    "ruben",
    "mike"
);
echo count ($lijst);
for ($a = 0; $a < count($lijst); $a++) {
    echo "\n", $lijst[$a];
}
foreach ($a as $key => $value) {
    echo ($value) .PHP_EOL;
}