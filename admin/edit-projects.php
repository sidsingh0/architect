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
} else {
    echo "<script>window.history.back()</script>";
}
$select_prjc = "select * from projects where project_id=$test_id";

$prjc = mysqli_query($conn, $select_prjc)->fetch_assoc();

$select_prjc_img = "select * from project_image where project_id=$test_id";

$prjc_img = mysqli_query($conn, $select_prjc_img);

if (isset($_POST["update"])) {

    $name = htmlspecialchars($_POST["name"]);
    $address = htmlspecialchars($_POST["address"]);
    $year = htmlspecialchars($_POST["year"]);
    $area = htmlspecialchars($_POST["area"]);
    $client = htmlspecialchars($_POST["client"]);
    $brief = htmlspecialchars($_POST["brief"]);
    $date = date("D M d, Y G:i:s");


    $u_prjc = "update  projects set name = '$name', address = '$address', year=  $year,area=$area,client='$client',brief='$brief',date='$date' where project_id=$test_id";


    $res_u_prjc = mysqli_query($conn, $u_prjc) or die("Something Went Wrong!!!");
    var_dump($res_u_prjc);
    

    if ($res_u_prjc) {
        echo "<script>alert('Project Updated Successfully')</script>";
    } else {
        echo "<script>alert('Something Went Wrong!!!')</script>";
    }
}


if (isset($_POST["delete"])) {
    $del_img = false;
    $name = htmlspecialchars($_POST["name"]);
    $address = htmlspecialchars($_POST["address"]);
    $year = htmlspecialchars($_POST["year"]);
    $area = htmlspecialchars($_POST["area"]);
    $client = htmlspecialchars($_POST["client"]);
    $brief = htmlspecialchars($_POST["brief"]);
    $date = date("D M d, Y G:i:s");



    if ($prjc and $prjc_img) {
        while ($res = $prjc_img->fetch_assoc()) {
            $path="assets/uploads/".$res['path'];
            
            if (file_exists($path)) {
                unlink($path);
                $del_img = true;
            } else {
                $del_img = false;
            }
        }

        if ($del_img) {
            $del = "delete from project_image where project_id=" . $test_id;
            $res_del = mysqli_query($conn, $del);

            $del_prjc = "delete from projects where project_id=" . $test_id;
            $res_del_prjc = mysqli_query($conn, $del_prjc);

            global $res_del,$res_del_prjc;
        } else {

            echo '<script>alert("Something Went Wrong !")</script>';
        }
    } else {
        echo '<script>alert("No entries Found!")</script>';
    }



    if ($res_del and $res_del_prjc) {
        echo '<script>alert("Deleted Succesfully!")</script>';

        $res_1 = mysqli_query($conn, "select * from projects order by project_id");

        if (mysqli_num_rows($res_1) >= 1) {
            $res_1 = $res_1->fetch_assoc();

            $new_test = $res_1['project_id'];

            echo "<script>window.location.replace('./edit-projects.php?id=" . $new_test . "')
  
        </script>";
        } else {
            echo "<script>window.location.replace('./add-project.php')
  
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

    <title>Edit - Projects</title>
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

    $select_prjc = "select * from projects where project_id=$test_id";

    $prjc = mysqli_query($conn, $select_prjc)->fetch_assoc();
    ?>



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Project</h1>
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
                    <!-- <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data"> -->
                    <form method="POST" action="" enctype="multipart/form-data">

                        <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Choosen Photos</label>
                            <div class="col-md-8 col-lg-9">

                                <p style="margin-top:5px;color:#f44336;">For Image Change Delete The Project and Add Again!!!</p>
                                <p id="filerror" style="margin-top:5px;color:#f44336;"></p>

                                <div class="col-md-8 col-lg-9 mt-3" style="display:inline-block">
                                    <div id="preview"><?php
                                                        while ($row = $prjc_img->fetch_assoc()) {
                                                            $img = $row['path'];
                                                            echo "<img src='assets/uploads/$img' height='100px' width='100px'>";
                                                        }
                                                        ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="name" type="text" class="form-control" id="name" value="<?php echo $prjc['name'] ?>" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="about" class="col-md-4 col-lg-3 col-form-label">Address</label>
                            <div class="col-md-8 col-lg-9">
                                <textarea name="address" class="form-control" id="address" required><?php echo $prjc['address'] ?></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Year</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="year" type="number" class="form-control" id="year" value="<?php echo $prjc['year'] ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Project Area (in sqm)</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="area" type="number" class="form-control" id="area" value="<?php echo $prjc['area'] ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Client Name</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="client" type="text" class="form-control" id="client" value="<?php echo $prjc['client'] ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Brief</label>
                            <div class="col-md-8 col-lg-9">
                                <textarea name="brief" class="form-control" id="brief" required> <?php echo $prjc['brief'] ?></textarea>
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
    <script type="text/javascript">

    </script>
</body>

</html>