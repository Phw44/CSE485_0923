<?php

$array1 = [
    [77, 87],
    [23, 45]
];

$array2 = [
    'giá trị 1', 'giá trị 2'
];

$kq = [];

for ($i = 0; $i < count($array1); $i++) {
    $kq[$i] = [$array2[$i]];
    foreach ($array1[$i] as $value) {
        $kq[$i][] = $value;
    }
}
print_r($kq);
