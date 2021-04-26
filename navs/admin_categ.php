<div class="container">
    <div class="row">
      <br><br>
      <!--- LEFT SIDE --->
      <div class="col-md-2">
        <b>Categories</b>
        
        <ul class="list-group">
          <li class="list-group-item">
            <a href="?category=computers">Computers</a>
          </li>
          <li class="list-group-item">
            <a href="?category=monitors">Monitors</a>
          </li>
          <li class="list-group-item">
            <a href="?category=tablets">Tablets</a>
          </li>
          <li class="list-group-item">
            <a href="?category=cellphones">Cellphones</a>
          </li>
          <li class="list-group-item">
            <a href="?category=watches">Watches</a>
          </li>
          <?php 

            require_once 'db_createTables.php';


            $sql= "SELECT * FROM categories";
            $result = $connect->query($sql);
            
            ?>
          <?php while($data=$result ->fetch_assoc()){?>
     
        
              <li class="list-group-item text-break">
                  <a href="?category=<?php echo $data['title']; ?>"><?php echo ucfirst($data['title']); ?></a>

        <?php }?>
        
        </ul>



        
      </div>