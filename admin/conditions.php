<?php
    session_start();

    // $now = time(); // Checking the time now when home page starts.

    // if ($now > $_SESSION['expire']) {
    //     unset($_SESSION['username']);
    //     session_destroy();
    //     // header("Location: ../index.php");
    // }


    if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 1800)) {
        // last request was more than 30 minutes ago
        session_unset();     // unset $_SESSION variable for the run-time 
        session_destroy();   // destroy session data in storage
        echo "<script>alert(Your Session has expired);</script>";
    }
    $_SESSION['start'] = time(); 
