<?php
$category = $_COOKIE['category'];





require_once 'db_connect.php';
 
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



 
    $sql = "INSERT INTO $category (title, descriptions, price, `image`) VALUES ('$title', '$descriptions', '$price','$filename')";
    if($connect->query($sql) === TRUE) {
        header("Location: items.php?category=$category");
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
    <title>Add Items</title>
</head>
<body>

<?php include 'navs/admin_navbar.php'?>


<form action="add.php" method="POST" enctype='multipart/form-data'>
    <div class="form-group container">
        
        <input type="hidden"   class="form-control container" value="<?php echo $id ?>" name="id"/>
        <br><br>
        <label for="title">Title</label>
        <input type="text" class="form-control container" id="title" name="title" />
        <br><br>
        <label for="descriptions">Description </label>
        <input type="text" class="form-control container" id="descriptions" name="descriptions" />
   
       <br><br>
        <label for="price">Price</label>
        <input type="text" class="form-control container"  id="price" name="price" />
        <br><br>
   
        <br><br>
        <label >Select Category</label>
       <select name="category">  
            <option value="computers">Computers</option> 
            <option value="monitors">Monitors</option> 
            <option value="tablets">Tablets</option> 
            <option value="cellphones">Cellphones</option> 
            <option value="watches">Watches</option> 
            <?php 

                require_once 'db_createTables.php';


                $sql= "SELECT * FROM categories";
                $result = $connect->query($sql);

                ?>
                <?php while($data=$result ->fetch_assoc()){?>

                    <option value="<?php echo $data['title']; ?>"><?php echo ucfirst($data['title']); ?></option> 

                <?php }?>
        
        </select> 
        <br><br>
        <input type='file' name='file' />
        <br><br>
        <input type="submit" name="add"/>
        </div>
    </form>

<?php

//Take values from url and send if statement. 
//Read json file and add related values to category.


?>

    
</body>
</html>



