<?php
require_once APP_ROOT . '/app/models/Book.php';
class BookService
{
    public function getAllBook()
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=quanlythuvien', 'root', '442003');
            $sql = "SELECT * FROM sach LIMIT 10";
            $stmt = $conn->query($sql);
            $books = [];
            while ($row = $stmt->fetch()) {
                $book = new Book($row['id'], $row['tenSach'], $row['namXuatBan'], $row['idTacGia']);
                $books[] = $book;
            }
            return $books;
        } catch (PDOException $e) {
            return $books = [];
        }
    }

    public function addBook()
    {
        //         try {
        //             if (isset($_POST['idSong'])) {
        //                 $id = isset($_POST['idSong']) ? $_POST['idSong'] : null;
        //                 $tenBaiHat = isset($_POST['tenBaiHat']) ? $_POST['tenBaiHat'] : null;
        //                 $caSi = isset($_POST['caSi']) ? $_POST['caSi'] : null;
        //                 $idTheLoai = isset($_POST['idTheLoai']) ? $_POST['idTheLoai'] : null;

        //                 $conn = new PDO("mysql:host=localhost;dbname=quanlybaihat", 'root', '180623');
        //                 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //                 $sql = "INSERT INTO baihat(id,tenBaiHat,caSi,idTheLoai) VALUES ({'$id'},'{$tenBaiHat}', '{$caSi}', '{$idTheLoai}')";
        //                 $conn->exec($sql);
        // 
?>
// <script>
// alert('Them thanh cong');
// 
</script>
// <?php
            //             }
            //         } catch (PDOException $e) {
            //             echo $sql . "<br>" . $e->getMessage();
            //         }

            //         $conn = null;
        }

        public function editBook()
        {
        }

        public function deleteBook()
        {
            $id = 3;
            try {
                $conn = new PDO('mysql:host=localhost;dbname=quanlythuvien', 'root', '180623');
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // sql to delete a record
                $sql = "DELETE FROM sach WHERE id=$id";
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "Record deleted successfully";
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
            $conn = null;
        }
    }