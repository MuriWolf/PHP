<?php
    $title = "Logout";
    session_start(); // we want to use session, whith this we can store user information (try just small thing)
    session_unset();
    session_destroy();

    require_once("../includes/functions.php");
    
    redirect("login.php");
    ?>

<?php include("../includes/footer.php"); ?>