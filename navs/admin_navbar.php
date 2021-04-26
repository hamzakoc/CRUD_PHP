<nav class="navbar navbar-expand-lg navbar-dark bg-dark container" >
	  <a class="navbar-brand" href="#">Techno Shop(Dashboard)</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  
		  <li class="nav-item active">
			<a class="nav-link" href="dashboard.php">Dashboard</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="items.php">Items</a>
		  </li>
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Categories
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		
			  	<a class="dropdown-item" href="items.php?category=computers">Computers</a>
				<a class="dropdown-item" href="items.php?category=monitors">Monitors</a>
				<a class="dropdown-item" href="items.php?category=tablets">Tablets</a>
				<a class="dropdown-item" href="items.php?category=cellphones">Cellphones</a>
				<a class="dropdown-item" href="items.php?category=watches">Watches</a>
			<?php 

				require_once 'db_createTables.php';
				$sql= "SELECT * FROM categories";
				$result = $connect->query($sql);

				?>
				<?php while($data=$result ->fetch_assoc()){?>

					<a class="dropdown-item" href="items.php?category=<?php echo lcfirst($data['title']); ?>"><?php echo ucfirst($data['title']); ?></a>

				<?php }?>
		  
		  <li class="nav-item">
			<a class="nav-link" href="search.php" tabindex="-1">Search</a>
			
		  </li>
		
		</ul>
		
		 <a href='index.php' class="my-2">
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-power" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M5.578 4.437a5 5 0 1 0 4.922.044l.5-.866a6 6 0 1 1-5.908-.053l.486.875z"/>
        <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z"/>
      </svg>
			Logout
		  </a>
	  </div>
	</nav>