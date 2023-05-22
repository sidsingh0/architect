<?php
// session_start();
include("./conditions.php");
include("../partials/connect.php");


if (isset($_POST["pass"])) {
    $pass = $_POST["pass"];
    $npass = $_POST["npass"];

    // echo $hash;
    $sql = "select * from users where username = 'admin' order by id";
    $result = mysqli_query($conn, $sql)->fetch_assoc();
    if ($result) {
        if ($pass == $npass) {
          
            $hash = password_hash($npass, PASSWORD_DEFAULT);
            
            $u_sql = "update users set password= '$hash' where username = 'admin'";
            $u_res = mysqli_query($conn, $u_sql);
          

            if ($u_res) {
                
                echo "<script>
                        alert('password is changed...');
                        window.location='/admin/login.php';
                      </script>";
                // header("location: ./login.php");
            }
        } else {
            echo "Passwords Do not Match";
            echo "<script>
                        alert('Passwords Dont Match...');
                        window.location='/admin/changepass.php';
                      </script>";
        }
    } else {
        
        echo "<script>
                        alert('Something Went Wrong...');
                        window.location='/admin/login.php';
                      </script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chheda Admin Change Pass</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Change password</h3>
            </div>
        </div>
        <hr>
        <div class="row">

            <div class="col-lg-12">
                <form method="post" class="bg-light p-5 contact-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="npass" class="form-control" placeholder="Confirm Password">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Change" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>


        </div>


        <center>
            <hr>
            <?php include("./footer.php"); ?>
        </center>
    </div>


</body>

</html>