<?php
// session_start();
include("./conditions.php");
include("../connect.php");


if (isset($_POST["pass"])) {
    $pass = $_POST["pass"];
    $npass = $_POST["npass"];

    // echo $hash;
    $sql = "select * from users where username = 'admin' ";
    $result = mysqli_query($conn, $sql)->fetch_assoc();
    if ($result) {
        if ($pass == $npass) {
          
            $hash = password_hash($npass, PASSWORD_DEFAULT);
            
            $u_sql = "update users set password= '$hash' where username = 'admin'";
            $u_res = mysqli_query($conn, $u_sql);
          

            if ($u_res) {
                
                echo "<script>
                        alert('password is changed...');
                        window.location='./admin/login.php';
                      </script>";
                // header("location: ./login.php");
            }
        } else {
            echo "Passwords Do not Match";
            echo "<script>
                        alert('Passwords Dont Match...');
                        window.location='./admin/changepass.php';
                      </script>";
        }
    } else {
        
        echo "<script>
                        alert('Something Went Wrong...');
                        window.location='./admin/login.php';
                      </script>";
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous" />
</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-sd-3 offset-lg-4">
                    <h1 class="mb-3 text-center">Admin log in</h1>
                    <form class="mb-3" method="post">
                        
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="pass" class="form-control" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="npass" class="form-control" placeholder="New Password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">
                            Login
                        </button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <center>
            <hr>
            <?php include("./footer.php"); ?>
        </center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>