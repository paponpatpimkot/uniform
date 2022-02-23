<nav class="main-header  navbar navbar-expand navbar-navy navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href=""><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->    
    <ul class="navbar-nav ml-auto">
      <?php 
        session_start();
        if(isset($_SESSION['name'])){
      ?>
      <li class="nav-item ">
        <a href="index.php" class="nav-link ">
          <i class="fa fa-user mx-2"></i><?php echo " ".$_SESSION['name'] ?>
        </a>        
      </li> 
      <li class="nav-item">
        <a href="logout.php" class="nav-link text-danger">
          <i class="nav-icon fas fa-power-off"></i>
          Logout
        </a>
      </li>            
      <?php }else{ ?>
      <li class="nav-item">
        <a href="login.php" class="btn btn-info nav-link">          
          Login
        </a>
      </li>       
      <?php } ?>     
    </ul>
</nav>