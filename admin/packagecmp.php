<?php
session_start();
error_reporting(0);
include('includes/config.php');
  $id=$_GET['apprId'];
  

  $updateQuery="UPDATE `register` SET `Updated_status`=1 WHERE `id`='$id'"; 

  $query = $dbh->prepare($updateQuery);
  $query->execute();
$lastInsertId = $dbh->lastInsertId();
  if($query){
           
           header("Location: ../admin/dashboard.php");
        }
        else{
            
            echo "Error";
        
        }




?>
