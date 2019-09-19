<?php
include "DB.php";

class Model
{
   private $conn;

   public function __construct()
   {
      $db = new DB();
      $this->conn = $db->connect();
   }
   private function prepare()
   {

   }
   protected function selectAll($table)
   {
      $sql = "SELECT * FROM $table ";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);

   }
   protected function delete($table,$column,$value)
   {
      $sql = "DELETE FROM $table WHERE $column = $value";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
   }
}