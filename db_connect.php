<?php

//PHP & MySQLI OOP
$dbName = "f0t54_assign2";
$connect = mysqli_connect("localhost","root","","assign2");


// Check connection
if ($connect -> connect_errno) {
    die("Failed to connect to MySQL: " . $connect -> connect_error);

}
else {
    //  echo "Successfully Connected";
  
    
}

//If database is not exist create one
$dbName = "f0t54_assign2";

if (!mysqli_select_db($connect,$dbName)){
    $sql = "CREATE DATABASE ".$dbName;
    if ($connect->query($sql) === TRUE) {
        echo "Database created successfully";
    }else {
        echo "Error creating database: " . $connect->error;
    }
} 


