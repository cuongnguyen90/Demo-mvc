<?php

include "Model/Model.php";
include "Class/Reader.php";

class M_Reader extends Model
{
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM reader";
        $result = $this->model->selectAll($sql);
        $arr = [];
        foreach ($result as $item) {
            $reader = new Reader($item);
            array_push($arr, $reader);
        }
        return $arr;
    }

    public function deleteReader($value)
    {
        $sql = "DELETE FROM reader WHERE  id = $value";
        $this->model->queryItem($sql);
    }

    public function getReader($value)
    {
        $sql = "SELECT * FROM reader WHERE id=$value";
        $object = $this->model->getItem($sql);
        return $reader = new Reader($object);
    }

    public function updateReader($object)
    {
        $reader = new Reader($object);
        $sql = "UPDATE reader SET code=:code, name=:name, phone=:phone,address=:address,email=:email,image=:image WHERE id=".$reader->getId();
        $stmt = $this->model->conn->prepare($sql);
        $stmt->bindParam(':code',$reader->getCode());
        $stmt->bindParam(':name',$reader->getName());
        $stmt->bindParam(':phone',$reader->getPhone());
        $stmt->bindParam(':address',$reader->getAddress());
        $stmt->bindParam(':image',$reader->getImages());
        $stmt->bindParam(':email',$reader->getEmail());
        $stmt->execute();

    }
    public function addNewReader($object)
    {
        $reader = new Reader($object);
        $sql = "INSERT INTO reader (code,name,phone,address,email,image) VALUES (?,?,?,?,?,?)";
        $stmt = $this->model->conn->prepare($sql);
        $stmt->bindParam(1,$reader->getCode());
        $stmt->bindParam(2,$reader->getName());
        $stmt->bindParam(3,$reader->getPhone());
        $stmt->bindParam(4,$reader->getAddress());
        $stmt->bindParam(5,$reader->getEmail());
        $stmt->bindParam(6,$reader->getImages());
        $stmt->execute();
    }
}