<?php
    include("./connect.php");

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
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#project" class="active1">Projects</a></li>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#project" class="active1">Projects</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li><a href="appointment.php" id="aptbtn" style="border: 2px solid #FFCB74;">Appointment</a></li>
            </ul>
        </nav>
    </header>


    <section class="singleproject" id="singleproject">
        <h2 class="singleprojectheader">Lodha Splendora</h2>
        <p class="singleprojectlocation" style="color:#FFCB74;margin-top:2px;">Kasarvadavli, Thane 400-607</p>
        <div class="photogallerygrid">
            <div style="background:url('../architect/assets/img/appointment1.png');" class="photogallerygridimg" alt="" id="singleprojectmainphoto"></div>
            <div style="background:url('../architect/assets/img/appointment2.png');" class="photogallerygridimg" alt=""></div>
            <div style="background:url('../architect/assets/img/project1.png');" class="photogallerygridimg" alt=""></div>
            <div style="background:url('../architect/assets/img/project2.png');" class="photogallerygridimg" alt=""></div>
        </div>
        <div class="singleprojectdescription">
            <div class="singleprojectdescriptionright">
                <p>
                    Mahindra Kale is a passionate architect with a decade of experience in the industry. He is known for his innovative designs that combine functionality with aesthetics, and his ability to work closely with clients to understand and deliver their vision. 
                </p>

                <div class="projectcounter">
                    <div class="projectcounterelement">
                        <img class="projectcounterelementimg" src="../architect/assets/img/calendar.png" alt="">
                        <div class="projectcounterelementtext">
                            <p class="projectcounterlabel">Year of completion</p>
                            <p class="projectcountervalue">2009</p>
                        </div>
                    </div>
                    <div class="projectcounterelement">
                        <img class="projectcounterelementimg" src="../architect/assets/img/calendar.png" alt="">
                        <div class="projectcounterelementtext">
                            <p class="projectcounterlabel">Project Area (in sqm)</p>
                            <p class="projectcountervalue">6000</p>
                        </div>
                    </div>
                </div>
                <div class="projectcounter" style="margin-top: 15px;">
                    <div class="projectcounterelement">
                        <img class="projectcounterelementimg" src="../architect/assets/img/calendar.png" alt="">
                        <div class="projectcounterelementtext">
                            <p class="projectcounterlabel">Client</p>
                            <p class="projectcountervalue">Lodha Realty Pvt. Ltd.</p>
                        </div>
                    </div>
                </div>
            </div>
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