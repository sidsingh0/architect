  <!-- ======= Header ======= -->
  <?php 
  // include("./conditions.php");
  include("../connect.php");
  
  
  if (isset($_SESSION)){
    if ($_SESSION['username'] != "admin" ) {
      header('location: ./login.php');
    }
  }

  $sql = "select * from users where username = 'admin'";
  $result = mysqli_query($conn, $sql)->fetch_assoc();
  if ($result) {
$name=$result['username'];
  }
  ?>
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Admin Panel</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

       <!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d d-md-block dropdown-toggle ps-2"><?php echo $name;?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

            <li>
              <a class="dropdown-item d-flex align-items-center" href="./logout.php?logout=true">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span> 
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->