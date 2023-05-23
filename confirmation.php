<?php
    include("./connect.php");
    // $_POST = json_decode(file_get_contents("php://input"), true);
    if(isset($_POST["slot"])){
        if(isset($_POST["date"]) && isset($_POST["slot"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["name"])){
            $date=htmlspecialchars($_POST["date"]);
            $slot=htmlspecialchars($_POST["slot"]);
            $phone=htmlspecialchars($_POST["phone"]);
            $email=htmlspecialchars($_POST["email"]);
            $name=htmlspecialchars($_POST["name"]);

            $query="insert into appointments (name, email, phone, date, slot_id) values ('$name', '$email', $phone, '$date',  $slot)";
            
        //    insert into unapproved slots 
            // $query_slot="insert into approved_slots(date, slot_id) values ( '$date',  $slot)";
       
            mysqli_query($conn,$query) or die($message="<p style='color:#ff7575'>There was a problem processing your request. Please call us to book.</p>");
            
            $message="<p>Thanks for booking. We will get back to you with a confirmation soon!</p>";
            echo "<script>window.location = '/architect/confirmation.php'</script>";
            // mysqli_query($conn,$query_slot) or die($message="<p style='color:#ff7575'>There was a problem processing your request. Please call us to book.</p>");
            
        }else{
            $message="<p style='color:#ff7575'>There was a problem processing your request. Please call us to book.</p>";
            echo "<script>window.location = '/architect/confirmation.php'</script>";
        }
    }else{
        echo "<script>window.location = '/architect/index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahindra Kale Architects</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">    
    <link rel="stylesheet" href="https://use.typekit.net/upp3wxp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div id="myLinks">
        <a href="index.php" style="margin:0;padding:5px 0px 5px 0px">Home</a>
        <a href="index.php#project" style="margin:0;padding:5px 0px 5px 0px">Projects</a>
        <a href="index.php#contact" style="margin:0;padding:5px 0px 5px 0px">Contact</a>
        <a href="appointment.php" style="margin:0;padding:5px 0px 5px 0px">Appointment</a>
    </div>
    <header class="underlyingheader">
        <img class="logo" src="assets/img/logo.png" height="45px">
        <nav>
            <ul class="navlink">
                <li><a href="index.php" class="active1">Home</a></li>
                <li><a href="index.php#project">Projects</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li><a href="appointment.php" style="border: 2px solid #FFCB74;">Appointment</a></li>
            </ul>
        </nav>
    </header>
    <header class="header">
        <img class="logo" src="assets/img/logo.png" height="45px">
        <div class="hamburger" style="margin-left: auto;" id="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <nav>
            <ul class="navlink">
                <li><a href="index.php" class="active1">Home</a></li>
                <li><a href="index.php#project">Projects</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li><a href="appointment.php" id="aptbtn" style="border: 2px solid #FFCB74;">Appointment</a></li>
            </ul>
        </nav>
    </header>


    <section class="appointment" id="appointment">
        <h2 class="confirmationtitle">See you soon!</h2>
            
            <div class="appointment1fullbanner">
                    <img src="/architect/assets/img/contactlogo.png">
                    <!-- <p>Thanks for booking. We will get back to you with a confirmation soon!</p> -->
                    <?php echo $message ?>
            </div>

    </section>


    <footer style="padding-top: 10px;">
        <div class="footer-pages">
            <a><p style="font-weight: 500;">Home</p></a>
            <a><p style="font-weight: 500;">Services</p></a>
            <a><p style="font-weight: 500;">Projects</p></a>
            <a><p style="font-weight: 500;">Contact</p></a>

        </div>
        <p>©2023 Mahindra Kale & Architects.</p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="/architect/assets/js/index.js"></script>

</body>
</html>