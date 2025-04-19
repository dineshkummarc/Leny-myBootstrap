   <nav class="navbar navbar-expand navbar-dark bg-dark static-top" style="background-image: linear-gradient(white, #000066); width: -20px;">

      <a class="navbar-brand mr-1" href="homepage.php">DETAINEE MANAGEMENT SYSTEM</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
        
      <!-- Navbar -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-3 my-md-0">
      <ul class="navbar-nav ml-auto ml-md-0">
            <i class="fas fa-user-circle fa-fw"></i>
            <?php echo  $_SESSION['firstname']. ' '.$_SESSION['lastname'] ;?><br>      
            <i class="fas fa-sign-out-alt fa-fw" href="#" data-toggle="modal" data-target="#logoutModal">Logout</i>
      </ul>
    </form>
    </nav>
