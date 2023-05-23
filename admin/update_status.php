<?php
include("./conditions.php");
include("../connect.php");


if (isset($_POST['updateId'])) {
    $updateId = $_POST['updateId'];

    $get_status = "select * from appointments where id=$updateId";

    $res = mysqli_query($conn, $get_status);

    if (mysqli_num_rows($res) > 0) {
        while ($r = $res->fetch_assoc()) {
            $date = $r['date'];
            $slot = $r['slot_id'];
            $id = $r['id'];

            if ($r['approved'] == 1) {
                $u_status = "update appointments set approved=0 where id=$updateId and date='$date' and slot_id=$slot";

                $u_res = mysqli_query($conn, $u_status) or die("Something Went Wrong ");





                $query_slot = "delete from approved_slots where date = '$date' and slot_id=$slot ";
                mysqli_query($conn, $query_slot) or die("Something Went Wrong ");


                echo 'no';
            } elseif ($r['approved'] == 0) {
                $u_status = "update appointments set approved=1 where id=$updateId and date='$date' and slot_id=$slot";
                $u_res = mysqli_query($conn, $u_status) or die("Something Went Wrong ");

                $query_slot = "insert into approved_slots(date, slot_id) values ( '$date',  $slot)";
                mysqli_query($conn, $query_slot) or die("Something Went Wrong ");

                echo 'yes';
            } else {
                echo "something went wrong";
            }
        }
    } else {
        echo 'No Appointments to Display';
    }
}
