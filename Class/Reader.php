<?php


class Reader
{
   private $id;
   private $code;
   private $name ;
   private $email;
   private $phone;
   private $address;
   private $images;

   public function __construct($object)
   {
      $this->id = isset($object->id) ? $object->id : '';
      $this->code = $object->code;
      $this->name = $object->name;
      $this->email = $object->email;
      $this->phone = $object->phone;
      $this->address = $object->address;
      $this->images = isset($object->image) ? $object->image : 'images.png';
   }

   /**
    * @return mixed
    */
   public function getId()
   {
      return $this->id;
   }

   /**
    * @return mixed
    */
   public function getPhone()
   {
      return $this->phone;
   }

   /**
    * @return mixed
    */


   /**
    * @return mixed
    */
   public function getEmail()
   {
      return $this->email;
   }

   /**
    * @return mixed
    */
   public function getAddress()
   {
      return $this->address;
   }

   /**
    * @return mixed
    */
   public function getCode()
   {
      return $this->code;
   }

   /**
    * @return mixed
    */
   public function getName()
   {
      return $this->name;
   }

    /**
     * @return string
     */
    public function getImages()
    {
        return $this->images;
    }





}