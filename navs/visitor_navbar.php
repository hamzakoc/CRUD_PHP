<nav class="navbar navbar-expand-lg navbar-dark bg-dark container" >
		<a class="navbar-brand" href="index.php">Techno Shop</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="itemsvisitor.php">Items</a>
				</li>
				<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Categories
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <a class="dropdown-item" href="itemsvisitor.php?category=computers">Computers</a>
				<a class="dropdown-item" href="itemsvisitor.php?category=monitors">Monitors</a>
				<a class="dropdown-item" href="itemsvisitor.php?category=tablets">Tablets</a>
				<a class="dropdown-item" href="itemsvisitor.php?category=cellphones">Cellphones</a>
				<a class="dropdown-item" href="itemsvisitor.php?category=watches">Watches</a>
				<?php 

				require_once 'db_createTables.php';
				$sql= "SELECT * FROM categories";
				$result = $connect->query($sql);

				?>
				<?php while($data=$result ->fetch_assoc()){?>

					<a class="dropdown-item" href="itemsvisitor.php?category=<?php echo lcfirst($data['title']); ?>"><?php echo ucfirst($data['title']); ?></a>

				<?php }?>
		
		  </li>
				<li class="nav-item">
					<a class="nav-link" href="searchVisitor.php" tabindex="-1">Search</a>
				</li>
			</ul>

			<a href="config/loginPage.php" class="my-2">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor"
					xmlns="http://www.w3.org/2000/svg">
					<path
						d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
					<path fill-rule="evenodd"
						d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
				</svg>
				Login
			</a>
		</div>
	</nav>
