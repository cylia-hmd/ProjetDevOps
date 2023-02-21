<?php
namespace Devops;
use PDO;
use PDOException;


class Config  
{
   
    private const host = 'localhost';
    private const user = 'c2062225c_admin';
    private const password = '^edHs;}f?}ll';
    private const db_name = 'c2062225c_passiones';

    private $dsn = 'mysql:host=' . self::host . ';dbname=' . self::db_name . '';

    protected $conn = null;
   
    //get connection with the database
    public function __construct() {
      try {
        $this->conn = new PDO($this->dsn, self::user, self::password);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
        die('Error: ' . $e->getMessage());
      }
    }
  }

?>