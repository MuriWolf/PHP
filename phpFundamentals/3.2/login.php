<?php
    $title = "Get";
    include("../includes/header.php");
    require_once("../includes/functions.php");

    // if (isset($_POST["login"])) {
    //     $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    //     output($_POST);
    // }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        output($_POST);
    }

    // if email is not actually an email, it creates a variable with a message
    if ($email == false) {
        $status = "Please enter a valid email";
    }

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