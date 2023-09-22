<?php
$arrs = ['abc', 'V', 123, false];
// $arrs = ['a', 0, null, 'VVV', false];
foreach ($arrs as $key => $value) {
    if ($value == null) {
        continue;
    }
    echo strtoupper($value);
?>
<br>
<?php
}