<?php  include __DIR__.'/../includes/header.php';

//include __DIR__ . '/../includes/header.php'; 
 ?>

<?php
// @session_start();
// if (!isset($_SESSION['admin'])) {
//    @header('Location: /login.php');
    
// }
?>


<div class="row">
    <div class="col-md-4 col-lg-4 col-sm-6">  
        <?php include_once "siddebar.php" ?>      
    </div>
    
     <div class="col-md-8 col-lg-8 col-sm-6">
          <?php include_once "main.php"?>    

    </div>
</div>



