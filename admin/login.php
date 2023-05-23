<?php
session_start();
include("../connect.php");

if (isset($_POST["username"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sql = "select * from users where username = 'admin'";
    $result = mysqli_query($conn, $sql)->fetch_assoc();
    if ($result) {
        
     
        if ($result['password'] == '1234' ) {
         
            header("Location: ./changepass.php");
            
        } else {
            
            if (password_verify( $password,$result['password'])) {
               
             
                session_start();
           
                $_SESSION["username"] = $username;
                // $_SESSION['start'] = time(); // Taking now logged in time.
            

          
                header("Location: ./index.php");
            } else {

               
                echo "Password is Incorrect";
            }
            
            
            
        }
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
                        <div class="form-group" >
                            <label for="email">Username:</label>
                            <input type="text" class="form-control" name="username" id="email" required />
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password" id="password" required />
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">
                            Login
                        </button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>