<?php
include "database.php";


/* edit data */


  
   
  if(isset($_GET['delete-task']) && !empty($_GET['delete-task']) ) {
     
    $id = $_GET['delete-task'];
    

     /* sql query*/
  $query = "DELETE";
  $query .= " FROM todo ";
  $query .= "WHERE id=$id"; 

    //print_r($query);exit;
    $result = $conn->query($query);
    if ($result) {
        echo "<script>window.location='index.php'</script>";
      }
    

 }




?>
