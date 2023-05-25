<?php
// session_start();
include("./conditions.php");
include("../connect.php");
if (isset($_SESSION)) {
    if ($_SESSION['username'] != "admin") {
        header('location: ./login.php');
    }
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
            <h1>Confirmed Slots</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Confirmed Slots</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">

                <div class="col-xl-12 col-md-12">

                    <div class="">
                        <div class="">
                            <table id="confirmed">
                                <thead>


                                    <th>Name</th>
                                    <th>Phone No.</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Slot Time</th>

                                </thead>
                                <tbody>

                                    <?php
                                    $q_slots = "SELECT * from appointments join approved_slots join slots on (appointments.date = approved_slots.date) and (appointments.slot_id and approved_slots.slot_id)and (slots.slot_id = approved_slots.slot_id) where approved = 1";
                                    $res_slots = mysqli_query($conn, $q_slots);

                                    if ($res_slots) {

                                        while ($res = $res_slots->fetch_assoc()) {


                                    ?>
                                            <tr>
                                                <td><?php echo $res['name']; ?></td>
                                                <td>
                                                    <a href="tel:<?php echo $res['phone']; ?>">
                                                        <?php echo $res['phone']; ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="mailto:<?php echo $res['phone']; ?>">
                                                        <?php echo $res['email']; ?>
                                                    </a>
                                                </td>
                                                <td><?php echo $res['date']; ?></td>
                                                <td><?php echo $res['slot_name']; ?></td>


                                            </tr>

                                        <?php } ?>


                                </tbody>
                            </table>
                        <?php } else {
                                        echo "No Entries to Show";
                                    } ?>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                        <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

                        <script>
                            $(function() {
                                $("#confirmed").DataTable();
                            });
                        </script>
                        </div>
                    </div>

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