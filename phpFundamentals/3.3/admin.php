<?php
    $title = "Admin";
    session_start(); // we want to use session, whith this we can store user information (try just small thing)

    if(isset($_SESSION["counter"])) {
        $_SESSION["counter"] += 1;
    } else {
        $_SESSION["counter"] = 1;
    }

    $visits = "This page is visited: ". $_SESSION["counter"];

    include_once("../includes/config.php");
    require_once("../includes/functions.php");
    
    // just a validate, if its false, go to login
    ensure_user_is_authenticated();
    
    include_once("../includes/header.php");
    ?>

<div>
    <h2>Hi! Here is your admin page!</h2>
    <div>
        <p>Your email is: <?php print_r($_SESSION["email"]); ?></p>
        <a href="logout.php">Logout</a>
        <p><?php echo $visits; ?></p>
    </div>

<?php include("../includes/footer.php"); ?>