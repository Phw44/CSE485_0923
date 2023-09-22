<?php
$numbers = [
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
    65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
];
$Sum = 0;
$avg = 0;
$Sum = array_sum($numbers);
echo "TBC = " . $avg = $Sum / (count($numbers));
echo "<br>Cac so lon hon bang {$avg} la: ";
foreach ($numbers as $value) {
    if ($value >= $avg) {
        echo $value . ' ';
    }
}

echo "<br>Cac so nho hon {$avg} la : ";
foreach ($numbers as $value) {
    if ($value < $avg) {
        echo $value . ' ';
    }
}
