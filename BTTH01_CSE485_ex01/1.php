<?php
$arrs = [2, 5, 6, 9, 10];
$tong = 0;
$hieu = 0;
$tich = 1;
$thuong = 1.0;
foreach ($arrs as $value) {
    $tong += $value;
    $hieu -= $value;
    $tich *= $value;
    $thuong /= $value;
}

echo "Tổng các phần tử = " . implode("+", $arrs) . " = " . $tong;
?>
<br>
<?php
echo "Hiệu các phần tử = " . implode("-", $arrs) . " = " . $hieu;
?>
<br>
<?php
echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $tich;
?>
<br>
<?php
echo "Thương các phần tử = " . implode("/", $arrs) . " = " . $thuong;
?>