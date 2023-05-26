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

    $name = htmlspecialchars($_POST["name"]);
    $address = htmlspecialchars($_POST["address"]);
    $year = htmlspecialchars($_POST["year"]);
    $area = htmlspecialchars($_POST["area"]);
    $client = htmlspecialchars($_POST["client"]);
    $brief = htmlspecialchars($_POST["brief"]);
    $date = date("D M d, Y G:i:s");

    $insert_sql = "insert into projects ( name, address, year,area,client,brief,date) values ('$name', '$address', $year, $area,'$client','$brief','$date')";
    $res_insert_sql = mysqli_query($conn, $insert_sql) or die("Something Went Wrong!!!");

    if ($res_insert_sql) {
        echo "<script>alert('Project Added Successfully')</script>";
    } else {
        echo "<script>alert('Something Went Wrong!!!')</script>";
    }

    $id_query= "select project_id from projects where name='$name' and date='$date' ";
    $res_id_sql = mysqli_query($conn, $id_query) or die("Something Went Wrong!!!");

    if (mysqli_num_rows($res_id_sql) > 0) {
        $row = mysqli_fetch_assoc($res_id_sql);
        $projectID = $row['project_id'];
        foreach($_FILES['fileImg']['name'] as $key=>$val){
            move_uploaded_file($_FILES['fileImg']['tmp_name'][$key],"assets/uploads/$name".$val);
            $image_query="insert into project_image (path,project_id) values ('$name$val',$projectID)";
            $res_image_query=mysqli_query($conn, $image_query) or die("Image upload failed!");
            if(!$res_image_query){
                echo "<script>alert('Image upload failed. Please delete the created project and try again.')</script>";
            }
        }
    } else {
        echo "<script>alert('Something Went Wrong!Please delete the created project and try again.')</script>";
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style media="screen">
        #preview {
            display: flex;
            width: 400px;
            /* height:400px */
            margin-top: -15px;
            flex-wrap: wrap;
        }

        #preview img {
            width: 20%;
            margin-right: 5px;
            /* height: 50%; */
        }
    </style>
</head>

<body>

    <?php include("./header.php");
    include("./navbar.php");
    ?>



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Project</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Add Project</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Profile Edit Form -->
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">

                        <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Choose Photos</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="fileImg[]" id="fileImg" type="file" accept="image/*" multiple onchange="preview()" class="form-control" required>
                                <p id="filerror" style="margin-top:5px;color:#f44336;"></p>
                                
                                <div class="col-md-8 col-lg-9 mt-3" style="display:inline-block">
                                    <div id="preview"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="name" type="text" class="form-control" id="name" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="about" class="col-md-4 col-lg-3 col-form-label">Address</label>
                            <div class="col-md-8 col-lg-9">
                                <textarea name="address" class="form-control" id="address" required></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Year</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="year" type="number" class="form-control" id="year" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Project Area (in sqm)</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="area" type="number" class="form-control" id="area" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Client Name</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="client" type="text" class="form-control" id="client" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Brief</label>
                            <div class="col-md-8 col-lg-9">
                                <textarea name="brief" class="form-control" id="brief" required></textarea>
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
    <script type="text/javascript">
        function preview() {
            $('#preview').html("")
            var totalFiles = $('#fileImg').get(0).files.length;
            // if(total)

            if (totalFiles != 4) {
                $('#fileImg').val("");
                $('#filerror').html("Please upload 4 files.")
            } else {
                for (var i = 0; i < totalFiles; i++) {
                    $('#preview').append("<img src = '" + URL.createObjectURL(event.target.files[i]) + "'>");
                    $('#filerror').html("")
                }
            }

        }
    </script>
</body>

</html>