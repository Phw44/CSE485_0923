<?php
$servername = "localhost";
$username = "root";
$password = "442003";
$dbname = "btth01_cse485";
$ma_tloai = $_GET['ma_tloai'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("DELETE FROM theloai WHERE ma_tloai={$ma_tloai}");

    if ($stmt->execute()) {
        header("Location: /musicProject/admin/category.php");
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;