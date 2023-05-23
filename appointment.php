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
                <li><a href="index.php" >Home</a></li>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#project">Projects</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li><a href="appointment.php" id="aptbtn" style="border: 2px solid #FFCB74;background-color:#FFCB74;color:black;font-weight:500;">Appointment</a></li>
            </ul>
        </nav>
    </header>


    <section class="appointment" id="appointment">
        <h2 class="appointmenttitle">Book an appointment.</h2>
        <form action="confirmation.php" onsubmit="return checkRegistration()" method="POST">
            
            <div class="appointment1" id="appointment1">
                <div class="appointment1firsthalf">
                    <img src="/architect/assets/img/contactlogo.png">
                </div>
                <div class="appointment1secondhalf">
                    <label for="name" style="margin-bottom:10px;">What should we call you?</label>
                    <input name="name" id="name" class="inputfield" style="margin-bottom:20px;">
                    <label for="phone" style="margin-bottom:10px;">Phone Number</label>
                    <input type="number" name="phone" id="phone" class="inputfield" style="margin-bottom:20px;" >
                    <label for="email" style="margin-bottom:10px;">Email</label>
                    <input type="email" name="email" id="email" class="inputfield" style="margin-bottom:20px;">
                    <p id="error" style="margin-bottom: 10px;color:#ff7575"></p>
                    <div onclick="nextPage()" class="contact-button" style="margin:0px">
                        <p>Next</p>
                        <img src="/architect/assets/img/contactarrow.png">
                    </div>
                    <a style="margin-top: 5px;text-decoration: underline;font-weight: 400;color:#FFCB74;font-size: 14px;">Having trouble booking? Book on a call.</a>
                </div>
            </div>

            <div class="appointment1 hidesection" id="appointment2">
                <div class="appointment1firsthalf appointment1firsthalf2">
                    <img src="/architect/assets/img/contactlogo.png">
                </div>
                <div class="appointment1secondhalf">
                    <label for="date" style="margin-bottom:10px;">Pick a date</label>
                    <input type="date" name="date" id="date" class="inputfield" style="margin-bottom:20px;">
                    <!-- <input type="hidden" name="slot" id="slot" value="Not Set"> -->
                    <p style="margin-bottom:10px;font-weight: 500;">Slot</p>
                    <div class="slotpick" id="slotpick">
                    </div>
                    <div class="slotpicknodate">
                        <br>
                        <p>Please select a date to pick the slot.</p>
                        <br>
                    </div>
                    <p id="error1" style="margin-top: 20px; margin-bottom:10px;color:#ff7575"></p>
                    <div class="aptbtncontainer">
                        <div onclick="prevpage()" class="contact-button backbutton">
                            <img src="assets/img/contactarrow.png">
                        </div>
                        <button class="contact-button" type="submit">
                            <p>Confirm booking</p>
                            <img src="assets/img/contactarrow.png">
                        </button>
                    </div>
                    <a style="margin-top: 5px;text-decoration: underline;font-weight: 400;color:#FFCB74;font-size: 14px;">Having trouble booking? Book on a call.</a>
                <input name="slot" type="hidden" id="finalslot">
                    
                </div>
            </div>


        </form>
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