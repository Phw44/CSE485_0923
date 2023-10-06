<?php
require_once APP_ROOT . '/app/models/Author.php';
class AuthorService
{
    public function getAllAuthor()
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=quanlythuvien', 'root', '442003');
            $sql = "SELECT * FROM tacgia LIMIT 10";
            $stmt = $conn->query($sql);
            $authors = [];
            while ($row = $stmt->fetch()) {
                $author = new Author($row['id'], $row['tenTacGia']);
                $authors[] = $author;
            }
            return $authors;
        } catch (PDOException $e) {
            return $authors = [];
        }
    }

    public function addAuthor()
    {
    }

    public function editAuthor()
    {
    }

    public function index()
    {
    }
}