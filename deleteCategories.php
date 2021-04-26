<?php
session_start();
include 'config/functions.php';
check_access();
//Get category name from cookies
$category = $_GET['category'];
$page = $_GET['page'];


//Get category name and and id. Delete data using ID and return new value. Go to last page category after deletion

 
if($_GET) {
    $id = $_GET['id'];

    require_once 'db_connect.php';

    $sqldel = "DELETE FROM $category WHERE id = {$id}";

    $sql2 = "SELECT  `title` FROM `categories` WHERE id= $id";
    $result2 = $connect->query($sql2);
    
    while($data=$result2 ->fetch_assoc()){
      $newData=$data['title'];
        echo $newData;
      $sql = "DROP TABLE $newData";
    
      if($connect->query($sql) and $connect->query($sqldel)) {
        header("Location: categories.php");
      } else {
          echo "Error updating record : " . $connect->error;
      }
    
    }


 

 
    $connect->close();

    
}

