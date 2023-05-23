<?php
// session_start();
include("./conditions.php");
include("../connect.php");
if (isset($_SESSION)) {

    if ($_SESSION['username'] != "admin") {
        header('location: ./login.php');
    }
}
$users_all = "select * from appointments";
$res_user = mysqli_query($conn, $users_all);

while ($res = $res_user->fetch_assoc()) {
    $date = $res['date'];
    $slot = $res['slot_id'];
    $id = $res['id'];
}
if (isset($_GET['id'])) {

    $query_appr = "update appointments set approved=1 where date='$date' and slot_id=$slot and id=$id";
    // echo $query_appr; exit;
    mysqli_query($conn, $query_appr) or die("Something Went Wrong ");


    $query_slot = "insert into approved_slots(date, slot_id) values ( '$date',  $slot)";
    mysqli_query($conn, $query_slot) or die("Something Went Wrong ");
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Appointment List</title>
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
            /* border: none; */
            background-color: #fff;
            padding: 5px 10px;
            /* width: 70%; */
            cursor: pointer;
            /* box-shadow: 0px 0px 15px gray */
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
            <h1>Appointment</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Appointment</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">

                <div class="col-xl-12 col-md-12">

                    <div class="">
                        <div class="">

                            <table id="appointment" cellspacing="2" cellpadding="10">
                                <thead>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No.</th>
                                    <th>Date</th>
                                    <th>Slot Id</th>
                                    <th>Approved</th>
                                    <th>Approve</th>

                                </thead>
                                <tbody>

                                    <?php


                                    $users_all = "select * from appointments";
                                    $res_user = mysqli_query($conn, $users_all);

                                    while ($res = $res_user->fetch_assoc()) {
                                        $res['approved'] = $res['approved'] == 1 ? 'Approved' : 'Unapproved';

                                        echo "
                            <tr>
                                
                                <td>  " . $res['name'] . " </td>
                                <td > <a class='text-primary' href='mailto:" . $res['email'] . "'>  " . $res['email'] . "</a> </td>
                                <td>   <a class='text-primary' href='tel:" . $res['phone'] . "'>  " . $res['phone'] . "</a>  </td>
                                <td>  " . $res['date'] . " </td>
                                <td>  " . $res['slot_id'] . " </td>
                                <td class= " . $res['id'] . ">  " . $res['approved'] . " </td>
                                <td>
                                            
                                <button  id= " . $res['id'] . " class='status-btn''>  
                                    change status
                                </button>
                                     </td>
                               
                              </tr>
                                ";
                                    } ?>

                                </tbody>
                            </table>
                            <!-- ============displaying data with approval button========== -->

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                            <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

                            <script>
                                $(function() {
                                    $("#appointment").DataTable();
                                });


                                $('.status-btn').on('click', function() {
                                    var username = $(this).attr('id');
                                    $.ajax({
                                        type: "POST",
                                        url: "./update_status.php",
                                        data: {
                                            updateId: username,

                                        },
                                        dataType: "html",
                                        success: function(data) {


                                            if (data == 'no') {

                                                $("." + username).html("Unapproved");

                                            } else if (data == 'yes') {

                                                $("." + username).html("Approved");

                                            }
                                        }

                                    })
                                })
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