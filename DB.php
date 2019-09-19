<?php


class DB
{
   private static $conn = NULL;
   const HOST = "mysql:host=localhost;dbname=Library_Manager";
   const USER = "root";
   const PASS = "E2bu4Pro3";

   public static function connect()
   {
      if (!isset(self::$conn)){
         try{
            self::$conn = new PDO(self::HOST,self::USER,self::PASS);
         }catch (Exception $e){
            return $e->getMessage();
         }
      }
      return self::$conn;
   }
}