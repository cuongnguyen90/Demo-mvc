<?php
include "Model/M_Reader.php";

class C_Reader
{
   private $model;

   public function __construct()
   {
      $this->model = new M_Reader();
   }

   public function showAll()
   {

      return $this->model->getAll();

   }
   public function deleteReader($value)
   {
      return $this->model->delete('reader','id',$value);
   }
}