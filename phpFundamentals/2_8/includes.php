<?php
    $title = "Includes";
    include("../includes/header.php");
    require_once("../includes/functions.php");

    $guitars = [
        ["name" => "Vela", "manufacturer" => "PRS"],
        ["name" => "Explorer", "manufacturer" => "Gibson"],
        ["name" => "Stratocaster", "manufacturer" => "Fender"]
    ];

    $guitar_names = pluck($guitars, "name");
    ?>

<?php
    output($guitars);
    output($guitar_names);
?>

<?php include("../includes/footer.php"); ?>