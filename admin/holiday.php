<?php
// session_start();
include("./conditions.php");
include("../connect.php");
// if (isset($_SESSION)) {
//     if ($_SESSION['username'] != "admin") {
//         header('location: ./login.php');
//     }
// }
if(isset($_POST["submit2"])){
    $date=$_POST["date"];
    $slot_get_query = "select * from slots";
    $slot_get_query_res = mysqli_query($conn, $slot_get_query);
    if (mysqli_num_rows($slot_get_query_res) > 0) {
        while ($res = $slot_get_query_res->fetch_assoc()) {
            $slot_id=$res['slot_id'];
            $fulldaybreakquery="insert into approved_slots(date,slot_id) values('$date',$slot_id)";
            $fulldaybreakquery_res=mysqli_query($conn,$fulldaybreakquery);
        }
    }
    echo("<script>alert('Successfully added a holiday')</script>");
    // $slot_insert_submit2_query="insert into wher "
// }elseif (isset($_POST["submit1"])) {
}

if(isset($_POST["submit1"])){
    $date=$_POST["date"];
    $slot_get_query = "select * from slots";
    $slot_get_query_res = mysqli_query($conn, $slot_get_query);
    if (mysqli_num_rows($slot_get_query_res) > 0) {
        while ($res = $slot_get_query_res->fetch_assoc()) {
            $slot_id=$res['slot_id'];
            $fulldaybreakquery="insert into approved_slots(date,slot_id) values('$date',$slot_id)";
            $fulldaybreakquery_res=mysqli_query($conn,$fulldaybreakquery);
        }
    }
    // $slot_insert_submit2_query="insert into wher "
// }elseif (isset($_POST["submit1"])) {

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Confirmed Slots</title>
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

    <link href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


    <style>
        .status-btn {
            border: none;
            color: white;
            padding: 5px 10px;
            width: 100px;
            cursor: pointer;
            box-shadow: 0px 0px 15px gray
        }

        .approve {
            background-color: green;
        }

        .disapprove {
            background-color: red;
        }
    </style>




</head>

<body>

    <?php
    include("./header.php");
    include("./navbar.php");
    ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Holidays/Breaks</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Break Slots</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">

            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">

                <div class="row mb-3">
                    <label for="date" class="col-md-4 col-lg-3 col-form-label">Select a date to add a break. </label>
                    <div class="col-md-8 col-lg-9">
                        <input name="date" type="date" class="form-control" id="date" required>
                        <input name="slot" type="hidden" class="form-control" id="slot" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Brief</label>
                    <div class="col-md-8 col-lg-9 adminslotcontainer">
                        <?php
                        $slot_get_query = "select * from slots";
                        $slot_get_query_res = mysqli_query($conn, $slot_get_query);
                        if (mysqli_num_rows($slot_get_query_res) > 0) {
                            while ($res = $slot_get_query_res->fetch_assoc()) {
                                echo '<p id="' . $res["slot_id"] . '" class="adminslotelement">' . $res["slot_name"] . '</p>';
                            }
                        }
                        ?>
                        <p></p>
                    </div>
                </div>


                <div class="text-center">
                    <button type="submit" name="submit1" value="submit1" class="btn btn-primary">Add Break</button>
                    <button type="submit" name="submit2" value="submit2" class="btn btn-warning">Get whole day as a break</button>
                </div>
            </form>

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
        $(document).on("click", ".adminslotelement", function() {
            const allslots = document.querySelectorAll(".adminslotelement");
            const finalslot = document.getElementById("slot");
            allslots.forEach((slot) => {
                slot.classList.remove("slotselected");
            });
            this.classList.toggle("slotselected");
            finalslot.setAttribute("value", this.getAttribute("id"));
        });
    </script>

</body>

</html>