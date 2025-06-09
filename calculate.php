<?php
$minOutput = "";
$maxOutput = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $min = isset($_POST["minNumber"]) ? (int)$_POST["minNumber"] : 0;
    $max = isset($_POST["maxNumber"]) ? (int)$_POST["maxNumber"] : 0;
    $counter = 0;

    while ($counter <= $min) {
        $minOutput .= $counter . "<br>";
        $counter++;
    }

    while ($counter <= $max) {
        $maxOutput .= $counter . "<br>";
        $counter++;
    }
}
?>
