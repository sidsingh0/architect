<?php
session_start();
include("../partials/connect.php");

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
            

          
                header("Location: ./admin/index.php");
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
    <title>Legalcare </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Admin Login</h3>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="form-group d-flex">
                        <button type="submit" name="submit"  class="btn btn-primary py-3 px-5">LOGIN</button>
                        
                        <!-- <a class="mx-3" href="./forgetpass.php">Forget Pass?</a> -->
                    </div>
                    </div>

                </form>

            </div>


        </div>
        <center>
    <hr>

    <?php include("./footer.php");?>
</center>
    
</div>

</body>

</html>