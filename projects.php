<?php
include("./connect.php");
$project_query="select project_id,name from projects ORDER BY project_id DESC limit 6";
$res_project_query=mysqli_query($conn,$project_query);

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
        <a href="projects.php"  class="active1" style="margin:0;padding:5px 0px 5px 0px">Projects</a>
        <a href="index.php#contact" style="margin:0;padding:5px 0px 5px 0px">Contact</a>
        <a href="appointment.php" style="margin:0;padding:5px 0px 5px 0px">Appointment</a>
    </div>
    <header class="underlyingheader">
        <img class="logo" src="assets/img/logo.png" height="45px">
        <nav>
            <ul class="navlink">
                <li><a href="index.php">Home</a></li>
                <li><a href="projects.php"  class="active1">Projects</a></li>
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
                <li><a href="projects.php" class="active1">Projects</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li><a href="appointment.php" id="aptbtn" style="border: 2px solid #FFCB74;">Appointment</a></li>
            </ul>
        </nav>
    </header>

    <section class="projectsection">
        <h2 class="projectsectionheader">Our Projects</h2>
        <div class="projectcardcontainer">

        <?php 
            if (mysqli_num_rows($res_project_query) > 0) {
                while ($res = $res_project_query->fetch_assoc()) {
                    $project_img_query="select path from project_image where project_id=".$res['project_id'];
                    $res_project_img_query=mysqli_query($conn,$project_img_query);
                    $img_path=$res_project_img_query->fetch_assoc()['path'];
                ?>

                <div class="slider-card">
                    <div class="slider-image" style="background-image: linear-gradient(180deg, rgba(17, 17, 17, 0) 70.83%, #111111 100%), url('<?php echo "../architect/admin/assets/uploads/".$img_path ?>');">
                        <a href="project-single.php?id=<?php echo $res['project_id']?>"><svg width="50" height="50" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="35" cy="35" r="33.5" stroke="#FFCB74" stroke-width="3" />
                            <path d="M59.0607 36.0607C59.6464 35.4749 59.6464 34.5251 59.0607 33.9393L49.5147 24.3934C48.9289 23.8076 47.9792 23.8076 47.3934 24.3934C46.8076 24.9792 46.8076 25.9289 47.3934 26.5147L55.8787 35L47.3934 43.4853C46.8076 44.0711 46.8076 45.0208 47.3934 45.6066C47.9792 46.1924 48.9289 46.1924 49.5147 45.6066L59.0607 36.0607ZM12 36.5H58V33.5H12V36.5Z" fill="#FFCB74" />
                        </svg>
                        </a>
                        <p><?php echo $res["name"] ?></p>
                    </div>
                </div>

        <?php
                    }
                }
            ?>
            
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="/architect/assets/js/index.js"></script>

</body>
</html>