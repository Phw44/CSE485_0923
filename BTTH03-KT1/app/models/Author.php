<?php
class Author
{
    private $id;
    private $tenTacGia;

    public function __construct($id, $tenTacGia)
    {
        $this->id = $id;
        $this->tenTacGia = $tenTacGia;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTenTacGia()
    {
        return $this->tenTacGia;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTenTheLoai($tenTacGia)
    {
        $this->tenTacGia = $tenTacGia;
    }
}