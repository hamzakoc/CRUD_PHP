<?php

 
$term = $_REQUEST['search']?? '';
$category = $_REQUEST['category']?? 'computers' ;
setcookie('category',$category, strtotime('10 day'));
setcookie('category',$term, strtotime('10 day'));


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
    <title>Search</title>
  </head>
  <body>
	<!--- TOP NAVIGATION ---->
  <?php include 'navs/visitor_navbar.php'?>


	<!--- CONTENT ---->
	<div class="container">
    <div class="row">
      
   

      <div class="container">
    <div class="row">
      <br><br>
      <!--- LEFT SIDE --->
      <div class="container">
    <div class="row">
      <br><br>
      <!--- LEFT SIDE --->
      <div class="col-md-2">
      <br><br>    
        <b>Categories</b>
        
        <ul class="list-group">
          <li class="list-group-item">
            <a href="?category=computers&search=<?php echo $term?>">Computers</a>
          </li>
          <li class="list-group-item">
            <a href="?category=monitors&search=<?php echo $term?>">Monitors</a>
          </li>
          <li class="list-group-item">
            <a href="?category=tablets&search=<?php echo $term?>">Tablets</a>
          </li>
          <li class="list-group-item">
            <a href="?category=cellphones&search=<?php echo $term?>">Cellphones</a>
          </li>
          <li class="list-group-item">
            <a href="?category=watches&search=<?php echo $term?>">Watches</a>
          </li>
          <?php 

            require_once 'db_createTables.php';


            $sql= "SELECT * FROM categories";
            $result = $connect->query($sql);
            
            ?>
          <?php while($data=$result ->fetch_assoc()){?>
     
        
              <li class="list-group-item">
                  <a class= "text-break" href="?category=<?php echo lcfirst($data['title']); ?>&search=<?php echo $term?>"><?php echo ucfirst($data['title']); ?></a>

        <?php }?>
        
        </ul>



        
      </div>

      <!--- RIGHT SIDE --->
   
      <div class="col-md-10"><b>  
  
      <div class="row">
          <div class="col-md">
         
        </div>
        
      </div>



      <!--- RIGHT SIDE --->
      <div class="col-md-10">
      <br><br>   
        <b>Items</b>
		<form  action="searchVisitor.php" method="get" class="form-inline my-2 my-lg-0">
		  <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
		  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>

<br><br>

    <?php
require_once 'db_createTables.php';


$array = array("computers", "monitors", "tablets", "cellphones");

if(!empty($term)){

  $sql = "SELECT * FROM $category WHERE descriptions LIKE '%".$term."%'";
  $r_query = $connect->query($sql);
  
  while ($data=$r_query ->fetch_assoc()){ ?>
  
    <div class="card mb-3">
    
  <h5 class="card-title"><?php echo ucfirst($category); ?></h5>
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="upload/<?php echo $data['image']; ?>" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $data['title']; ?></h5>
                  <p class="card-text"> <?php echo $data['descriptions']; ?></p>
                  <p class="card-text"><small class="text-muted"><?php echo $data['price']; ?></small></p>
                </div>
              </div>
            </div>
          </div>
  
  <?php } ?>

<?php }else{

foreach($array as $value){?>


<?php
  // echo $value . "<br>";
$sql = "SELECT *  FROM $value WHERE title OR descriptions LIKE '%".$term."%'";
$r_query = $connect->query($sql);

while ($data=$r_query ->fetch_assoc()){ ?>

  <div class="card mb-3">
  
<h5 class="card-title"><?php echo ucfirst($value); ?></h5>
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="upload/<?php echo $data['image']; ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $data['title']; ?></h5>
                <p class="card-text"> <?php echo $data['descriptions']; ?></p>
                <p class="card-text"><small class="text-muted"><?php echo $data['price']; ?></small></p>
              </div>
            </div>
          </div>
        </div>

<?php } ?>
<?php } ?>

<?php
$sql = "SELECT * FROM categories";
$r_query = $connect->query($sql);

while ($data=$r_query ->fetch_assoc()){

$datas= $data['title'];?>

<?php
$sql1 = "SELECT * FROM $datas WHERE title OR descriptions LIKE '%".$term."%'";
$r_query1 = $connect->query($sql1);
while ($data1=$r_query1 ->fetch_assoc()){?>


<div class="card mb-3">
<h5 class="card-title"><?php echo ucfirst($data['title']); ?></h5>
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="upload/<?php echo $data1['image']; ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $data1['title']; ?></h5>
                <p class="card-text"> <?php echo $data1['descriptions']; ?></p>
                <p class="card-text"><small class="text-muted"><?php echo $data1['price']; ?></small></p>
              </div>
            </div>
          </div>
        </div>

<?php }?>

<?php }?>

<?php } ?>
     
      </div>
    </div>
	</div>

	
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
