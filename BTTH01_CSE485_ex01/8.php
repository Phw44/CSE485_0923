<?php
$min = PHP_INT_MAX; // Sử dụng một giá trị lớn nhất có thể
$max = 0;
$minString = '';
$maxString = '';
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

foreach ($array as $key => $value) {
    if (strlen($value) > $max) {
        $max = strlen($value);
        $maxString = $value;
    }
    if (strlen($value) < $min) {
        $min = strlen($value);
        $minString = $value;
    }
}
echo "Chuỗi ngắn nhất là  {$minString}, có độ dài là {$min}.<br>";
echo "Chuỗi dài nhất là {$maxString}, có độ dài là {$max}.";