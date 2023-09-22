<?php
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);

$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

$keysArray = array_values($keys);
$valuesArray = array_values($values);
$keysAndValues = array_combine($keysArray, $valuesArray);

print_r($keysAndValues);
