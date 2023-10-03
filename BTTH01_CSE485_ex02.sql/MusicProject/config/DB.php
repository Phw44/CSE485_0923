<?php
$dsn = 'mysql:host=localhost ; dbname=btth01_cse485';

$username = 'root';

$password = '442003';

$options = [];

try {
    $connection = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}