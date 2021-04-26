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
 
    $sql = "DELETE FROM $category WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
        header("Location: $page.php?category=$category");
    } else {
        echo "Error updating record : " . $connect->error;
    }
 
    $connect->close();

    
}

