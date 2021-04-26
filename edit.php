<?php
session_start();
include 'config/functions.php';
check_access();



$category = $_COOKIE['category'];




require_once 'db_createTables.php';
 
if($_POST) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $descriptions = $_POST['descriptions'];
    $price = $_POST['price'];
 

$filename = $_FILES['file']['name'];
$filetmpname = $_FILES['file']['tmp_name'];

//folder where images will be uploaded
$folder = 'upload/';
//function for saving the uploaded images in a specific folder

move_uploaded_file($filetmpname, $folder.$filename);


 
    $sql = "UPDATE $category SET title = '$title', descriptions = '$descriptions', price = '$price', image='$filename' WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
      header("Location: items.php?category=$category");
    } else {
        echo "Error while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}





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
    <title>Hello, world!</title>
  </head>
  <body>
	<!--- TOP NAVIGATION ---->
  <?php include 'navs/admin_navbar.php'?>

	<!--- CONTENT ---->
	<div class="container">
    <div class="row">
      
      <!--- LEFT SIDE --->
      <?php include 'navs/admin_categ.php'?>

      <!--- RIGHT SIDE --->
      <div class="col-md-10">
        <br><br><br>

    


<!-- echo and data from json -->
    <?php if (isset($_GET["id"])): ?>
            <?php 
      
      require_once 'db_connect.php';
        
      if($_GET['id']) {
          $id = $_GET['id'];
        
          $sql = "SELECT * FROM $category WHERE id = {$id}";
          $result = $connect->query($sql);
        
          $data = $result->fetch_assoc();
        
          $connect->close();
        
      ?>
        

    <form action="edit.php" method="POST" enctype='multipart/form-data'>

      <input type="hidden"   class="form-control container" value="<?php echo $data['id'] ?>" name="id"/>
          <div class="form-group row">
            <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
            
              <input type="text"  class="form-control " id="inputTitle" value="<?php echo $data['title'] ?>" name="title"/>
            </div>
          </div>
          <div class="form-group row">
            <label for="descriptions" class="col-sm-2 col-form-label">Description</label>

            <div class="col-sm-10">
                <textarea type="text" class="form-control " id="descriptions"  
                name="descriptions"><?php echo $data['descriptions'] ?></textarea>
            </div>
          </div>
          
      
          
          <div class="form-group row">
            <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
              
              <input type="text"  class="form-control" id="inputPrice" value="<?php echo $data['price'] ?>" name="price"/>
            </div>
          </div>
          
          
          <div class="form-group row">
            <label for="inputPicture" class="col-sm-2 col-form-label">Picture</label>
            <div class="col-md-4">
            <img src="upload/<?php echo $data['image']; ?>" class="card-img" alt="...">
            </div>
          
            <div class="col-sm-10">
            <br><br>
              <input type='file' name='file' class="form-control" id="inputPicture" />
            </div>
            
          </div>
          
          
          <div class="form-group row">
            <div class="col-sm-10">
              <!-- <button type="submit" class="btn btn-primary">Save</button> -->
            <a href="items.php?category=<?=$category?>">  <button type="submit"  class="btn btn-primary">Save</button></a>

            </div>
          </div>
        </form>
        <?php
      }
        ?>

        <?php endif; ?>

      </div>
    </div>
	</div>

	
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  
  </body>
</html>