  <!-- ======= Sidebar ======= -->
<?php 
include("../partials/connect.php");


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
        <a class="nav-link collapsed" href="about.php">
        <i class="bi bi-grid"></i>
          <span>About us</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="appointment.php">
        <i class="bi bi-grid"></i>
          <span>Appointments</span>
        </a>
      </li>
         
      <li class="nav-item">
        <a class="nav-link collapsed" href="add-testimonials.php">
          <i class="bi bi-grid"></i>
          <span>Testimonial</span>
        </a>
      </li>
      
      <li class="nav-heading">UPDATE EXISTING</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#test-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people-fill"></i><span>Update Testimonials</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="test-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <!-- loop here -->
          <?php
          $get_testimonials = "select * from testimonials";
          $res_get_testimonials = mysqli_query($conn, $get_testimonials);
          while ($res = $res_get_testimonials->fetch_assoc()) {
            echo '
        <li>
            <a href="edit-testimonials.php?id=' . $res["id"] . '">
            <i class="bi bi-circle"></i><span>' . $res["name"] . '</span>
            </a>
        </li>';
          }
          ?>
        </ul>
      </li>
      </li>

      <!-- End Testimonials Nav -->


    </ul>

  </aside>
  <!-- End Sidebar -->
