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
            
            $q_apr="select * from approved_slots where date='$date' and slot_id='$slot'";

            $res_apr=mysqli_query($conn,$q_apr);


            if ($r['approved'] == 1) {
                $u_status = "update appointments set approved=0 where id=$updateId and date='$date' and slot_id=$slot";

                $u_res = mysqli_query($conn, $u_status) or die("Something Went Wrong ");

                $query_slot = "delete from approved_slots where date = '$date' and slot_id=$slot ";
                mysqli_query($conn, $query_slot) or die("Something Went Wrong ");


                echo json_encode(array("msg1"=>"no","msg2"=>"Unapproved"));
                // echo 'no';
            } elseif ($r['approved'] == 0) {

                if(mysqli_num_rows($res_apr)>0){

                    echo json_encode(array("msg1"=>"exists","msg2"=>$r['name']));
                }else{
                    
                    $u_status = "update appointments set approved=1 where id=$updateId and date='$date' and slot_id=$slot";
                    $u_res = mysqli_query($conn, $u_status) or die("Something Went Wrong ");
                    
                    
                    $query_slot = "insert into approved_slots(date, slot_id) values ( '$date',  $slot)";

                    mysqli_query($conn, $query_slot) or die("Something Went Wrong ");
                    
                    echo json_encode(array("msg1"=>"yes","msg2"=>"Approved"));
                    // echo 'yes';
                    
                }
            } else {
                echo json_encode(array("msg1"=>"something went wrong"));
                
            }
        }
    } else {
        echo json_encode(array("msg1"=>"No Appointments to Display"));
       
    }
}
