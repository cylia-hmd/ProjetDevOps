<?php
namespace devops;
  require_once('shoe.php');
  require_once('utilities.php');
  require_once('shoesController.php');

  $controller = new ShoesController;
  
  // Handle Fetch All Shoes from te db 
  if (isset($_GET['index'])) {
    $res=$controller->index();
    echo $res;
  }
  
?>
