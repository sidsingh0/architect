<?php
    include("./connect.php");
    $_POST = json_decode(file_get_contents("php://input"), true);

    // when compiling the response in slot_id=>slot_name use the following code:

    if (isset($_POST['date'])) {
        $response_array = array();
        $date=$_POST['date'];
        $query="select * from slots where slot_id not in (select slot_id from unapproved_slots where date='$date')";
        $query_res = mysqli_query($conn, $query);
        while ($unapproved_slot = $query_res->fetch_assoc()) {
            $unapproved_slot_id=$unapproved_slot["slot_id"];
            $unapproved_slot_name=$unapproved_slot["slot_name"];
            $response_array [$unapproved_slot_id] = $unapproved_slot_name;
        }
        echo json_encode($response_array);
    }else{
        echo "<script>window.location = '/architect/index.php'</script>";
    }

?>