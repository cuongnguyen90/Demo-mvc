<?php
include "DB.php";

class Model
{
    protected $conn;

    public function __construct()
    {
        $db = new DB();
        $this->conn = $db->connect();
    }

    protected function selectAll($sql)
    {

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    protected function queryItem($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    protected function getItem($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

}