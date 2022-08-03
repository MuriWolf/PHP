<?php
    function sum($a, $b) {
        global $hello;

        echo $hello;
        $result = $a + $b;
        return $result;
    }

    function output($value) {
        echo "<pre>";
        print_r($value);
        echo "</pre>";
    }

    $guitars = [
        ["name" => "Vela", "manufacturer" => "PRS"],
        ["name" => "Explorer", "manufacturer" => "Gibson"],
        ["name" => "Stratocaster", "manufacturer" => "Fender"]
    ];

    function pluck($arr, $key) {
        $result = array_map(function($item) use($key){
            return $item[$key];
        }, $arr);
        return $result;
    }

    $guitar_names = pluck($guitars, "name");

    $title = "oh yeah baby";
    include("../includes/header.php");
?>

    <?php
        // output($sum01);
        output($guitars);
        output($guitar_names);
    ?>

<?php include("../includes/footer.php"); ?>