<?php


//Set and get cookies for storing category
$category = $_REQUEST['category'] ?? 'computers';
setcookie('category',$category, strtotime('10 day'));


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Items</title>
  </head>
  <body>
	<!--- TOP NAVIGATION ---->
  <?php include 'navs/visitor_navbar.php'?>
  <br><br>
	<!--- CONTENT ---->
	<div class="container">
    <div class="row">
      <br><br>
      <!--- LEFT SIDE --->
      <?php include 'navs/admin_categ.php'?>

      <!--- RIGHT SIDE --->
   
      <div class="col-md-10"><b>  
  
      <div class="row">
          <div class="col-md">
          <b>Items</b>
       
        </div>
        
      </div>


 <!-- Print each element of data by their category id. Getting category id by cookies -->


 <?php 

require_once 'db_createTables.php';


 $sql= "SELECT * FROM $category";
 $result = $connect->query($sql);
 
 ?>
 <?php while($data=$result ->fetch_assoc()){?>

  
      
    <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
            <img src="upload/<?php echo $data['image']; ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Title: <?php echo $data['title']; ?></h5>
                <p class="card-text">Description: <?php echo $data['descriptions']; ?></p>
                <p class="card-text">Price: <?php echo $data['price']; ?> $</p>

<!-- Edit and delete button -->
       
                
             
              </div>
            </div>
          </div>
        </div>
  
  
    
  <?php }?>

 <?php 

$result -> free_result();
$connect -> close();


?>


        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
	</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>


