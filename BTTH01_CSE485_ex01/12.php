<?php
$numbers = [
    'key1' => 12, 
    'key2' => 30, 
    'key3' => 4, 
    'key4' => -123, 
    'key5' => 1234, 
    'key6' => -12565, 
   ];
   
   // Lấy ra phần tử đầu tiên và cuối cùng
   $firstElement = reset($numbers);
   $lastElement = end($numbers); 
   
   // Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị
   $maxValue = max($numbers);
   $minValue = min($numbers);
   $sum = array_sum($numbers);
   
   // Sắp xếp mảng theo chiều tăng và giảm các giá trị
   $ascendingValues = $numbers;
   asort($ascendingValues);
   $descendingValues = $numbers;
   arsort($descendingValues);
   
   // Sắp xếp mảng theo chiều tăng và giảm các key
   $ascendingKeys = $numbers;
   ksort($ascendingKeys);
   $descendingKeys = $numbers;
   krsort($descendingKeys);
   
   // In kết quả
   echo "Phần tử đầu tiên: $firstElement <br>";
   echo "Phần tử cuối cùng: $lastElement <br>";
   echo "Số lớn nhất: $maxValue <br>";
   echo "Số nhỏ nhất: $minValue <br>";
   echo "Tổng các giá trị: $sum <br>";
   
   echo "Sắp xếp mảng theo chiều tăng giá trị: ";
   print_r($ascendingValues );
   
   echo "<br> Sắp xếp mảng theo chiều giảm giá trị:";
   print_r($descendingValues);
   
   echo "<br> Sắp xếp mảng theo chiều tăng key:";
   print_r($ascendingKeys);
   
   echo " <br> Sắp xếp mảng theo chiều giảm key:";
   print_r($descendingKeys);
   
?>