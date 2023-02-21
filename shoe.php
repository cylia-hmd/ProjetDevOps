<?php
namespace Devops;

require_once('config.php');

class Shoes extends Config
{
   private $name;


    //Name access and mutator
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
          return $this->name;
    }


    // Fetch all shoes from the database
    public function all() 
    {
      $sql = 'SELECT * FROM shoes ORDER BY id DESC';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
     
    }

    

  }

?>