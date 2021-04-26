<?php

//Take values from url and send if statement. 
//Read json file and add related values to category.

require_once 'db_createTables.php';
 
if($_POST) {
    $id = $_POST['id'];
    $title = str_replace(' ', '_', $_POST['title']);
    $descriptions = $_POST['descriptions'];

        


 
    $sql = "INSERT INTO categories (title, descriptions) VALUES ('$title', '$descriptions')";
    if($connect->query($sql) === TRUE) {
      header("Location: categories.php");
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

<?php 

require_once 'db_createTables.php';


 $sql= "SELECT * FROM categories";
 $result = $connect->query($sql);
 
 ?>
 
<br><br><br><br><br>


<!--- CONTENT ---->
<div class="container">
<h5>Manage Categories</h5>
    <div class="row">
<?php while($data=$result ->fetch_assoc()){?>
        <!--- LEFT SIDE --->
        <div class="col-md-2">

            <ul class="list-group">
                <li class="list-group-item">
                <h5 class="card-title text-break"><?php echo $data['title']; ?></h5>
                <p class="card-title text-break"><?php echo $data['descriptions']; ?></p>
                <div class="row">
          <div class="col-md">
          <div class="d-flex justify-content-end">
            <a href="editCategories.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">Edit</button></a>
            <a onClick="return confirm('Are you sure you want to delete this item?')" 
            href="deleteCategories.php?id=<?php echo $data['id']; ?>&category=categories&page=categories" class="btn btn-danger" >Delete</button></a>

              </div>
            </div>
          </div>
                </li>
           
            </ul>
        </div>
        <?php }?>
        <!--- RIGHT SIDE --->
        <div class="col-md-10">
            <br><br><br>

           
            <form method="post" action="categories.php">
            <h5>Add Categories</h5>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="title" value="<?php echo $data['title']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="descriptions" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea type="text" name="descriptions" class="form-control" id="descriptions"><?php echo $data['descriptions']; ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary ml-10">Save</button>
                        <a href="categories.php" class="btn btn-default">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>





    
</body>
</html>



