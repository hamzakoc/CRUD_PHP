<?php
include_once("db_connect.php");







$tbl_computers= "CREATE TABLE IF NOT EXISTS computers (
              id INT(11)  AUTO_INCREMENT,
			  title VARCHAR(255) ,
			  descriptions VARCHAR(255),
			  price DOUBLE ,
			  image LONGTEXT,
		      PRIMARY KEY (id)
             )";

$query = mysqli_query($connect, $tbl_computers);
// if ($query === TRUE) {
// 	echo "<h3>user table created OK :) </h3>"; 
// } else {
// 	echo "<h3>user table NOT created :( </h3>"; 
// }
////////////////////////////////////


$tbl_monitors = "CREATE TABLE IF NOT EXISTS monitors (
    id INT(11)  AUTO_INCREMENT,
    title VARCHAR(255) ,
    descriptions VARCHAR(255),
    price DOUBLE ,
    image LONGTEXT,
    PRIMARY KEY (id)
   )";

$query = mysqli_query($connect, $tbl_monitors);
// if ($query === TRUE) {
// echo "<h3>user table created OK :) </h3>"; 
// } else {
// echo "<h3>user table NOT created :( </h3>"; 
// }

////////////////////////////////////


$tbl_tablets = "CREATE TABLE IF NOT EXISTS tablets (
    id INT(11)  AUTO_INCREMENT,
    title VARCHAR(255) ,
    descriptions VARCHAR(255),
    price DOUBLE ,
    image LONGTEXT,
    PRIMARY KEY (id)
   )";

$query = mysqli_query($connect, $tbl_tablets);
// if ($query === TRUE) {
// echo "<h3>user table created OK :) </h3>"; 
// } else {
// echo "<h3>user table NOT created :( </h3>"; 
// }

////////////////////////////////////


$tbl_cellphones = "CREATE TABLE IF NOT EXISTS cellphones (
    id INT(11)  AUTO_INCREMENT,
    title VARCHAR(255) ,
    descriptions VARCHAR(255),
    price DOUBLE ,
    image LONGTEXT,
    PRIMARY KEY (id)
   )";

$query = mysqli_query($connect, $tbl_cellphones);
// if ($query === TRUE) {
// echo "<h3>user table created OK :) </h3>"; 
// } else {
// echo "<h3>user table NOT created :( </h3>"; 
// }

////////////////////////////////////


$tbl_watches = "CREATE TABLE IF NOT EXISTS watches (
    id INT(11)  AUTO_INCREMENT,
    title VARCHAR(255) ,
    descriptions VARCHAR(255),
    price DOUBLE ,
    image LONGTEXT,
    PRIMARY KEY (id)
   )";

$query = mysqli_query($connect, $tbl_watches);
// if ($query === TRUE) {
// echo "<h3>user table created OK :) </h3>"; 
// } else {
// echo "<h3>user table NOT created :( </h3>"; 
// }

////////////////////////////////////


$tbl_categories = "CREATE TABLE IF NOT EXISTS categories (
    id INT(11)  AUTO_INCREMENT,
    title VARCHAR(255) ,
    descriptions VARCHAR(255) ,
    PRIMARY KEY (id)
   )";

$query = mysqli_query($connect, $tbl_categories);


$sql= "SELECT * FROM categories";
$result = $connect->query($sql);


while($data=$result ->fetch_assoc()){
$crtTable =$data['title'];

 $tbl_newCategories = "CREATE TABLE IF NOT EXISTS $crtTable (
    id INT(11)  AUTO_INCREMENT,
    title VARCHAR(255) ,
    descriptions VARCHAR(255),
    price DOUBLE ,
    image LONGTEXT,
    PRIMARY KEY (id)
   )";

mysqli_query($connect, $tbl_newCategories);
  
   
}