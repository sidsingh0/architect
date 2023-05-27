<?php
// session_start();
include("./conditions.php");
include("../connect.php");
if (isset($_SESSION)) {
  if ($_SESSION['username'] != "admin") {
    header('location: ./login.php');
  }
}

if (isset($_POST["name"])) {
  $tgt_dir="assets/uploads/testimonials/";
  $tgt_file=$tgt_dir.basename($_FILES["profileImg"]["name"]);

  $name = htmlspecialchars($_POST["name"]);
  $company = htmlspecialchars($_POST["company"]);
  $position = htmlspecialchars($_POST["position"]);
  $content = htmlspecialchars($_POST["content"]);
  $profileImg=htmlspecialchars($_FILES["profileImg"]["tmp_name"]);

  move_uploaded_file($profileImg,$tgt_file);


  $insert_sql = "insert into testimonials ( name, company, position,content,path) values ('$name', '$company', '$position','$content','$tgt_file')";
  $res_insert_sql = mysqli_query($conn, $insert_sql) or die("Something Went Wrong!!!");
  if ($res_insert_sql) {
    echo "<script>alert('Testimonial Added Successfully')
    window.location='./add-testimonials.php';
    </script>";
  } else {
    echo "<script>alert('Something Went Wrong!!!')
    window.location='./add-testimonials.php';
    </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add - Testimonials</title>
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
      <h1>Add Testimonial</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Add Testimonial</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <!-- Profile Edit Form -->
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
         
          
            <div class="row mb-3">
              <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
              <div class="col-md-8 col-lg-9">
                <img src="" alt="Profile" id="frame" height="100px" width="100px" >
                <div class="pt-2">
                  <input type="file" name="profileImg" accept="image/*" onchange="preview()" required>

                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
              <div class="col-md-8 col-lg-9">
                <input name="name" type="text" class="form-control" id="fullName" required>
              </div>
            </div>

            <div class="row mb-3">
              <label for="about" class="col-md-4 col-lg-3 col-form-label">Content</label>
              <div class="col-md-8 col-lg-9">
                <textarea name="content" class="form-control" id="about" required></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label for="company" class="col-md-4 col-lg-3 col-form-label">Position</label>
              <div class="col-md-8 col-lg-9">
                <input name="position" type="text" class="form-control" id="position" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
              <div class="col-md-8 col-lg-9">
                <input name="company" type="text" class="form-control" id="company" required>
              </div>
            </div>


            <div class="text-center">
              <button type="submit" class="btn btn-primary">Save Changes</button>
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
  <script>
    function preview() {
      frame.src = URL.createObjectURL(event.target.files[0]);


    }
  </script>



</body>

</html>