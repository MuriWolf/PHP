<?php
    $title = "Get";
    session_start(); // we want to use session, whith this we can store user information (try just small thing)

    require_once("../includes/config.php");
    require_once("../includes/functions.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $password = $_POST["password"]; 

        // compare with data store, if is true, redirect to admin, otherwise, gives an error
        if (authenticate_user($email, $password)) {
            // define email in the session (later will be use to validate) 
            $_SESSION["email"] = $email;
            redirect("admin.php");
            die();
        } else {
            $status = "The provident credentials didnt work";
        }
        
        // if email is not actually an email, it creates a variable with a message
        if ($email == false) {
            $status = "Please enter a valid email";
        }
    }

    include_once("../includes/header.php");
    ?>

<div>
    <h2>Form with post</h2>
    <form action="" method="POST">
        <div>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <input type="submit" value="Login" name="login" id="login">
        </div>
        <?php if (isset($status)) {echo $status;} ?>
    </form>
</div>

<?php include("../includes/footer.php"); ?>