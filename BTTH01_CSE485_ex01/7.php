<?php
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
foreach ($array as $key => $value) {
    if (($value % 5 == 0) and ($value > 100) and ($value < 200)) {
        echo  "Cac so chia het cho 5 tu 100 - 200 la {$value} <br>";
    }
}