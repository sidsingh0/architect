<?php
// session_start();
include("./conditions.php");
include("../connect.php");

if (isset($_SESSION)) {
  if ($_SESSION['username'] != "admin") {

    header('location: ./login.php');
  }
}


if (isset($_GET["id"])) {
  $test_id = $_GET["id"];

} 
else {
  echo "<script>window.history.back()</script>";
}

if (isset($_POST["update"])) {
 
  // $test_id = $_GET["id"];
  $name = htmlspecialchars( $_POST["name"]);
  $company = htmlspecialchars($_POST["company"]);
  $content = htmlspecialchars($_POST["content"]);
  $position = htmlspecialchars($_POST["position"]);
  $update_sql = "update testimonials set position='$position', name='$name', company='$company', content='$content' where id=$test_id";
  // echo $update_sql;exit();
  $res_update_sql = mysqli_query($conn, $update_sql) or die(mysqli_error($conn));

  if ($res_update_sql) {

    echo '<script>alert("Updated Succesfully!")</script>';
    echo "<script>window.location='./edit-testimonials.php?id=".$test_id."'</script>";

  }
}


if (isset($_POST["delete"])) {

  $name = $_POST["name"];
  $company = $_POST["company"];
  $content = $_POST["content"];
  $position = $_POST["position"];
  $del = "delete from testimonials where id=" . $test_id;
  $res_del = mysqli_query($conn, $del);

  if ($res_del) {
    echo '<script>alert("Deleted Succesfully!")</script>';
    
    $res_1=mysqli_query($conn,"select * from testimonials order by id");
    
    if(mysqli_num_rows($res_1) >= 1){
      $res_1=$res_1->fetch_assoc();
     
     $new_test=$res_1['id'];
      
      echo "<script>window.location.replace('./edit-testimonials.php?id=".$new_test."')

      </script>";
    }else{
      echo "<script>window.location.replace('./add-testimonials.php')

      </script>";
      
    }

  } else {
    echo '<script>alert("Something Went Wrong!")</script>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit - Testimonials</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <?php include("./header.php");
  include("./navbar.php");
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Testimonials</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Testimonials</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <?php
        $select_testimonial = "select * from testimonials where id=$test_id";
        $testimonial = mysqli_query($conn, $select_testimonial)->fetch_assoc();
        ?>

        <div class="col-lg-12">
          <!-- Profile Edit Form -->
         
          <form method="POST" enctype="multipart/form-data">


            <div class="row mb-3">
              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
              <div class="col-md-8 col-lg-9">
                <input name="name" type="text" class="form-control" id="fullName" value="<?php echo $testimonial['name']; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="about" class="col-md-4 col-lg-3 col-form-label">Content</label>
              <div class="col-md-8 col-lg-9">
                <textarea name="content" class="form-control" id="about"><?php echo $testimonial['content']; ?></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label for="company" class="col-md-4 col-lg-3 col-form-label">position</label>
              <div class="col-md-8 col-lg-9">
                <input name="position" type="text" class="form-control" id="company" value="<?php echo $testimonial['position']; ?>">
              </div>
            </div>
            <div class="row mb-3">
              <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
              <div class="col-md-8 col-lg-9">
                <input name="company" type="text" class="form-control" id="company" value="<?php echo $testimonial['company']; ?>">
              </div>
            </div>


            <div class="text-center">
              <button type="submit" name="update" class="btn mx-2 btn-primary">Save Changes</button>

              <button type="submit" name="delete" class="btn btn-danger">Delete</button>
            </div>
          </form><!-- End Profile Edit Form -->


        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("./footer.php"); ?>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>