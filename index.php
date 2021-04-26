<?php
// read data

$category = 'computers';
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	<title>Techno Shop</title>
</head>

<body>


	<!--- TOP NAVIGATION ---->
	<?php include 'navs/visitor_navbar.php'?>

	
	<!--- CONTENT ---->


	<div class="container">
		<div class=" mt-4">

		<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active" data-interval="10000">
					<img src="images/techno.jpeg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item" data-interval="2000">
					<img src="images/techno.jpeg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					<img src="images/techno.jpeg" class="d-block w-100" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>

			<h1 class="display-4">Hello, world!</h1>
			
			<hr class="my-4">
			

			<!-- print data to th emain page  -->
			<div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-4">
    <div class="card">
      <img src="images/computers.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
	  <a class="text-success" href="itemsvisitor.php?category=computers">Computers</a>
        
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="images/monitors.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
	  <a class="text-success" href="itemsvisitor.php?category=monitors">Monitors</a>
        
        </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="images/tablets.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
	  <a class="text-success" href="itemsvisitor.php?category=tablets">Tablets</a>

        </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="images/cellphones.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
	  <a class="text-success" href="itemsvisitor.php?category=cellphones">Cellphones</a>

       
        </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="images/watches.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
	  <a class="text-success" href="itemsvisitor.php?category=watches">Watches</a>

         </div>
    </div>
  </div>
  <?php 

require_once 'db_createTables.php';


$sql= "SELECT * FROM categories";
$result = $connect->query($sql);

?>
<?php while($data=$result ->fetch_assoc()){?>


  <div class="col mb-4">
    <div class="card">
      <img src="images/default.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
	  <a class="text-success" href="itemsvisitor.php?category=<?php echo $data['title']; ?>"><?php echo ucfirst($data['title']); ?></a>
         </div>
    </div>
  </div>



<?php }?>
</div> 
		</div>
	</div>

	

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
		crossorigin="anonymous"></script>


</body>

</html>