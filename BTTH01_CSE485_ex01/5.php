<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];
$value = $a['b']['o']['b'];
echo "Giá trị = 3 mà có key là b từ mảng trên: {$value} <br>";
$value = $a['a']['c'];
echo "Giá trị = 1 mà có key là c từ mảng trên: {$value} <br>"; // Output: 1
$info = $a['a'];
echo "Thông tin của phần tử có key là a : ";
var_dump($info);