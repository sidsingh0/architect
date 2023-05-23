  <!-- ======= Sidebar ======= -->
<?php 
include("../connect.php");


if (isset($_SESSION)){
  if ($_SESSION['username'] != "admin" ) {
    header('location: ./login.php');
  }
}

?>
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">


      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Profile</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="appointment.php">
        <i class="bi bi-grid"></i>
          <span>Appointments</span>
        </a>
      </li>


      <!-- End Testimonials Nav -->


    </ul>

  </aside>
  <!-- End Sidebar -->
