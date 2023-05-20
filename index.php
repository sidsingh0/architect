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
        <a href="index.php#" style="margin:0;padding:5px 0px 5px 0px">Home</a>
        <a href="index.php#project" style="margin:0;padding:5px 0px 5px 0px">Projects</a>
        <a href="index.php#contact" style="margin:0;padding:5px 0px 5px 0px">Contact</a>
        <a href="appointment.php" style="margin:0;padding:5px 0px 5px 0px">Appointment</a>
    </div>
    <header class="underlyingheader">
        <img class="logo" src="assets/img/logo.png" height="45px">
        <nav>
            <ul class="navlink">
                <li><a href="index.php#" class="active1">Home</a></li>
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
                <li><a href="index.php#" class="active1">Home</a></li>
                <li><a href="index.php#project">Projects</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li><a href="appointment.php" id="aptbtn" style="border: 2px solid #FFCB74;">Appointment</a></li>
            </ul>
        </nav>
    </header>
    <!-- <div class="mobilenav">
        <ul class="navlink">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#" id="aptbtn" style="border: 2px solid #FFCB74;">Appointment</a></li>
        </ul>
    </div> -->

    <section class="hero" id="home">
        <h1>Mahindra Kale & Architects</h1>
        <p>Your vision, our expertise, a perfect partnership. Let’s bring your vision to life.</p>
        <div class="homebtnsection">
            <a class="homebtn" href="#contact">Get in touch</a>
            <svg width="35" height="35" class="heroarrow1" viewBox="0 0 84 86" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M41.4393 69.1039C42.0251 69.6896 42.9749 69.6896 43.5607 69.1039L53.1066 59.5579C53.6924 58.9721 53.6924 58.0224 53.1066 57.4366C52.5208 56.8508 51.5711 56.8508 50.9853 57.4366L42.5 65.9219L34.0147 57.4366C33.4289 56.8508 32.4792 56.8508 31.8934 57.4366C31.3076 58.0224 31.3076 58.9721 31.8934 59.5579L41.4393 69.1039ZM41 15.9567L41 68.0432H44L44 15.9567H41Z"
                    fill="#F6F6F6" />
                <path
                    d="M82.5 43C82.5 65.9533 64.3345 84.5 42 84.5C19.6655 84.5 1.5 65.9533 1.5 43C1.5 20.0467 19.6655 1.5 42 1.5C64.3345 1.5 82.5 20.0467 82.5 43Z"
                    stroke="#F6F6F6" stroke-width="3" />
            </svg>
        </div>
        <svg width="60" height="60" class="heroarrow" viewBox="0 0 84 86" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M41.4393 69.1039C42.0251 69.6896 42.9749 69.6896 43.5607 69.1039L53.1066 59.5579C53.6924 58.9721 53.6924 58.0224 53.1066 57.4366C52.5208 56.8508 51.5711 56.8508 50.9853 57.4366L42.5 65.9219L34.0147 57.4366C33.4289 56.8508 32.4792 56.8508 31.8934 57.4366C31.3076 58.0224 31.3076 58.9721 31.8934 59.5579L41.4393 69.1039ZM41 15.9567L41 68.0432H44L44 15.9567H41Z"
                fill="#F6F6F6" />
            <path
                d="M82.5 43C82.5 65.9533 64.3345 84.5 42 84.5C19.6655 84.5 1.5 65.9533 1.5 43C1.5 20.0467 19.6655 1.5 42 1.5C64.3345 1.5 82.5 20.0467 82.5 43Z"
                stroke="#F6F6F6" stroke-width="3" />
        </svg>
    </section>
    <section class="services">
        <h2>We believe in service.</h2>
        <div class="servicecards">
            <div class="servicecard hidden" style="transition: all 1.4s;">
                <div class="servicecard-image">
                    <img src="/architect/assets/img/service2.png" style="height: 120%;width:120%;object-fit:cover;">
                </div>
                <div class="servicecard-text">
                    <p>Architecture</p>
                    <svg width="40" class="servicesvg" height="20" viewBox="0 0 54 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M53.1471 13.0607C53.7329 12.4749 53.7329 11.5251 53.1471 10.9393L43.6012 1.3934C43.0154 0.807611 42.0657 0.807611 41.4799 1.3934C40.8941 1.97919 40.8941 2.92893 41.4799 3.51472L49.9651 12L41.4799 20.4853C40.8941 21.0711 40.8941 22.0208 41.4799 22.6066C42.0657 23.1924 43.0154 23.1924 43.6012 22.6066L53.1471 13.0607ZM0 13.5H52.0865V10.5H0V13.5Z"
                            fill="#FFCB74" />
                    </svg>
                </div>
            </div>

            <div class="servicecard hidden" style="transition: all 1.2s;">
                <div class="servicecard-image">
                    <img src="/architect/assets/img/service3.png" style="height: 120%;width:120%;object-fit:cover;">
                </div>
                <div class="servicecard-text">
                    <p>Structural Engineering</p>
                    <svg width="40" height="20" class="servicesvg" viewBox="0 0 54 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M53.1471 13.0607C53.7329 12.4749 53.7329 11.5251 53.1471 10.9393L43.6012 1.3934C43.0154 0.807611 42.0657 0.807611 41.4799 1.3934C40.8941 1.97919 40.8941 2.92893 41.4799 3.51472L49.9651 12L41.4799 20.4853C40.8941 21.0711 40.8941 22.0208 41.4799 22.6066C42.0657 23.1924 43.0154 23.1924 43.6012 22.6066L53.1471 13.0607ZM0 13.5H52.0865V10.5H0V13.5Z"
                            fill="#FFCB74" />
                    </svg>
                </div>
            </div>

            <div class="servicecard hidden middlecard" style="transition: all 1s;">
                <div class="servicecard-image">
                    <img src="/architect/assets/img/service.png" style="height: 120%;width:120%;object-fit:cover;">
                </div>
                <div class="servicecard-text">
                    <p>Interior Design</p>
                    <svg width="40" height="20" class="servicesvg" viewBox="0 0 54 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M53.1471 13.0607C53.7329 12.4749 53.7329 11.5251 53.1471 10.9393L43.6012 1.3934C43.0154 0.807611 42.0657 0.807611 41.4799 1.3934C40.8941 1.97919 40.8941 2.92893 41.4799 3.51472L49.9651 12L41.4799 20.4853C40.8941 21.0711 40.8941 22.0208 41.4799 22.6066C42.0657 23.1924 43.0154 23.1924 43.6012 22.6066L53.1471 13.0607ZM0 13.5H52.0865V10.5H0V13.5Z"
                            fill="#FFCB74" />
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-image">
            <img src="/architect/assets/img/sir.png" style="width:100%">
        </div>
        <div class="about-text">
            <h2>Meet Mr<span style="font-size: 55px;font-weight: 600;color: #FFCB74;">.</span> Mahindra Kale</h2>
            <p>Mahindra Kale is a passionate architect with a decade of experience in the industry. He is known for his
                innovative designs that combine functionality with aesthetics, and his ability to work closely with
                clients to understand and deliver their vision. </p>
            <div class="about-counter">
                <div class="about-counteritem">
                    <h2 style="font-family: 'Montserrat',sans-serif;font-size:40px;">26+</h2>
                    <p style="color: #FFCB74;">Clients</p>
                </div>

                <div class="about-counteritem">
                    <h2 style="font-family: 'Montserrat',sans-serif;font-size:40px;">26+</h2>
                    <p style="color: #FFCB74;" id="project">Projects</p>
                </div>

                <div class="about-counteritem">
                    <h2 style="font-family: 'Montserrat',sans-serif;font-size:40px;">26+</h2>
                    <p style="color: #FFCB74;">Years of Experience</p>
                </div>
            </div>
        </div>
    </section>
    <section class="projects" id="projects">
        <div class="project-text">
            <h2>Projects</h2>
            <p>Mahindra's portfolio includes a diverse range of projects, from commercial buildings to residential
                homes.</p>
        </div>
        <div class="slider-container">
            <div class="slider-card">
                <div class="slider-image"
                    style="background-image: linear-gradient(180deg, rgba(17, 17, 17, 0) 70.83%, #111111 100%), url('/architect/assets/img/project1.png');">
                    <svg width="50" height="50" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="35" cy="35" r="33.5" stroke="#FFCB74" stroke-width="3" />
                        <path
                            d="M59.0607 36.0607C59.6464 35.4749 59.6464 34.5251 59.0607 33.9393L49.5147 24.3934C48.9289 23.8076 47.9792 23.8076 47.3934 24.3934C46.8076 24.9792 46.8076 25.9289 47.3934 26.5147L55.8787 35L47.3934 43.4853C46.8076 44.0711 46.8076 45.0208 47.3934 45.6066C47.9792 46.1924 48.9289 46.1924 49.5147 45.6066L59.0607 36.0607ZM12 36.5H58V33.5H12V36.5Z"
                            fill="#FFCB74" />
                    </svg>
                    <p>Chester Hills, Palghar</p>
                </div>
            </div>
            <div class="slider-card">
                <div class="slider-image"
                    style="background-image: linear-gradient(180deg, rgba(17, 17, 17, 0) 70.83%, #111111 100%), url('/architect/assets/img/project2.png');">
                    <svg width="50" height="50" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="35" cy="35" r="33.5" stroke="#FFCB74" stroke-width="3" />
                        <path
                            d="M59.0607 36.0607C59.6464 35.4749 59.6464 34.5251 59.0607 33.9393L49.5147 24.3934C48.9289 23.8076 47.9792 23.8076 47.3934 24.3934C46.8076 24.9792 46.8076 25.9289 47.3934 26.5147L55.8787 35L47.3934 43.4853C46.8076 44.0711 46.8076 45.0208 47.3934 45.6066C47.9792 46.1924 48.9289 46.1924 49.5147 45.6066L59.0607 36.0607ZM12 36.5H58V33.5H12V36.5Z"
                            fill="#FFCB74" />
                    </svg>
                    <p>Chester Hills, Palghar</p>
                </div>
            </div>
            <div class="slider-card">
                <div class="slider-image"
                    style="background-image: linear-gradient(180deg, rgba(17, 17, 17, 0) 70.83%, #111111 100%), url('/architect/assets/img/project3.png');">
                    <svg width="50" height="50" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="35" cy="35" r="33.5" stroke="#FFCB74" stroke-width="3" />
                        <path
                            d="M59.0607 36.0607C59.6464 35.4749 59.6464 34.5251 59.0607 33.9393L49.5147 24.3934C48.9289 23.8076 47.9792 23.8076 47.3934 24.3934C46.8076 24.9792 46.8076 25.9289 47.3934 26.5147L55.8787 35L47.3934 43.4853C46.8076 44.0711 46.8076 45.0208 47.3934 45.6066C47.9792 46.1924 48.9289 46.1924 49.5147 45.6066L59.0607 36.0607ZM12 36.5H58V33.5H12V36.5Z"
                            fill="#FFCB74" />
                    </svg>
                    <p>Chester Hills, Palghar</p>
                </div>
            </div>
            <div class="slider-card">
                <div class="slider-image"
                    style="background-image: linear-gradient(180deg, rgba(17, 17, 17, 0) 70.83%, #111111 100%), url('/architect/assets/img/project1.png');">
                    <svg width="50" height="50" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="35" cy="35" r="33.5" stroke="#FFCB74" stroke-width="3" />
                        <path
                            d="M59.0607 36.0607C59.6464 35.4749 59.6464 34.5251 59.0607 33.9393L49.5147 24.3934C48.9289 23.8076 47.9792 23.8076 47.3934 24.3934C46.8076 24.9792 46.8076 25.9289 47.3934 26.5147L55.8787 35L47.3934 43.4853C46.8076 44.0711 46.8076 45.0208 47.3934 45.6066C47.9792 46.1924 48.9289 46.1924 49.5147 45.6066L59.0607 36.0607ZM12 36.5H58V33.5H12V36.5Z"
                            fill="#FFCB74" />
                    </svg>
                    <p>Chester Hills, Palghar</p>
                </div>
            </div>
        </div>
    </section>

    <section class="partners">
        <img id="partner1" src="/architect/assets/img/partner1.png" alt="" srcset="">
        <img id="partner2" src="/architect/assets/img/partner2.png" alt="" srcset="">
        <img id="partner3" src="/architect/assets/img/partner3.png" alt="" srcset="">
        <img id="partner4" src="/architect/assets/img/partner4.png" alt="" srcset="">
    </section>

    <section class="reviews">
        <h2>Our happy clients</h2>
        <div class="reviewcardcontainer">

            <div class="reviewcard">
                <div class="review-image" style="background-image: url('/architect/assets/img/review1.png');">
                </div>
                <div class="review-text">
                    <p>“His designs are not only aesthetically pleasing, but also environmentally sustainable, making
                        him a leader in the industry.”</p>
                    <br>
                    <p style="font-weight: 600;">Rhea Chakraborty</p>
                    <p>Palghar</p>
                </div>
            </div>

            <div class="reviewcard reviewcard2">
                <div class="review-image" style="background-image: url('/architect/assets/img/review2.png');">
                </div>
                <div class="review-text">
                    <p>“His attention to detail and innovative designs are a testament to his creativity and expertise.”
                    </p>
                    <br>
                    <p style="font-weight: 600;">Amey Mahajan</p>
                    <p>Titwala</p>
                </div>
            </div>

        </div>


        <div class="m-reviewcard">

            <div class="review-text">
                <p>“His designs are not only aesthetically pleasing, but also environmentally sustainable, making him a
                    leader in the industry.”</p>
                <!-- <br> -->
                <div class="m-reviewcard-bottom">
                    <div class="review-image" style="background-image: url('/architect/assets/img/review1.png');">
                    </div>
                    <div class="review-text">
                        <p style="font-weight: 600;">Rhea Chakraborty</p>
                        <p>Palghar</p>
                    </div>
                </div>
            </div>
        </div>

            <div class="reviewcontrols">
                <svg width="50" height="50" style="margin-right:20px" viewBox="0 0 70 70" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="35" cy="35" r="33.5" transform="rotate(-180 35 35)" stroke="#FFCB74" stroke-width="3" />
                    <path
                        d="M10.9393 33.9393C10.3536 34.5251 10.3536 35.4749 10.9393 36.0607L20.4853 45.6066C21.0711 46.1924 22.0208 46.1924 22.6066 45.6066C23.1924 45.0208 23.1924 44.0711 22.6066 43.4853L14.1213 35L22.6066 26.5147C23.1924 25.9289 23.1924 24.9792 22.6066 24.3934C22.0208 23.8076 21.0711 23.8076 20.4853 24.3934L10.9393 33.9393ZM58 33.5L12 33.5V36.5L58 36.5V33.5Z"
                        fill="#FFCB74" />
                </svg>
                <svg width="50" height="50" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="35" cy="35" r="33.5" stroke="#FFCB74" stroke-width="3" />
                    <path
                        d="M59.0607 36.0607C59.6464 35.4749 59.6464 34.5251 59.0607 33.9393L49.5147 24.3934C48.9289 23.8076 47.9792 23.8076 47.3934 24.3934C46.8076 24.9792 46.8076 25.9289 47.3934 26.5147L55.8787 35L47.3934 43.4853C46.8076 44.0711 46.8076 45.0208 47.3934 45.6066C47.9792 46.1924 48.9289 46.1924 49.5147 45.6066L59.0607 36.0607ZM12 36.5H58V33.5H12V36.5Z"
                        fill="#FFCB74" />
                </svg>
            </div>

    </section>

    <section class="contact" id="contact">
        <h2>Ready to get started?</h2>
        <div class="contactcard">
            <div class="contactcardfirsthalf">
                <img src="/architect/assets/img/contactlogo.png" alt="" srcset="">
                <div class="contact-text">
                    <p>We collaborate with ambitious people. Let’s build.</p>
                    <div class="contact-button">
                        <p>Book an appointment</p>
                        <img src="assets/img/contactarrow.png">
                    </div>
                </div>
            </div>
            <div class="contactcardsecondhalf">
                <div class="contactdivs">

                    <div class="contacticon">
                        <img src="/architect/assets/img/contactemail.png" alt="">
                        <div class="contacticon-text">
                            <p style="font-weight:600;">Email</p>
                            <p class="wordbreak">mahindrakale@gmail.com</p>
                        </div>
                    </div>

                    <div class="contacticon">
                        <img src="/architect/assets/img/contactphone.png" alt="">
                        <div class="contacticon-text">
                            <p style="font-weight:600;">Phone</p>
                            <p>+91 93726-42011</p>
                        </div>
                    </div>

                    <div class="contacticon">
                        <img src="/architect/assets/img/contactaddress.png" alt="">
                        <div class="contacticon-text">
                            <p style="font-weight:600;">Palghar Office</p>
                            <p>A/3, Shivaji Nagar 400607</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer style="padding-top: 10px;">
        <div class="footer-pages">
            <a>
                <p style="font-weight: 500;">Home</p>
            </a>
            <a>
                <p style="font-weight: 500;">Services</p>
            </a>
            <a>
                <p style="font-weight: 500;">Projects</p>
            </a>
            <a>
                <p style="font-weight: 500;">Contact</p>
            </a>

        </div>
        <p>©2023 Mahindra Kale & Architects.</p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="/architect/assets/js/index.js"></script>

</body>

</html>