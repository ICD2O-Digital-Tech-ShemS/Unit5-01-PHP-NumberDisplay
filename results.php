<?php
$numbers = "";
$numbers2 = "";

// Use correct POST keys
$min = $_POST['minNumber'];
$max = $_POST['maxNumber'];
$counter = $min;

// First loop: from 0 to min
while ($counter == $min) {
    $numbers = $numbers . $counter . "<br>";
    $counter = $counter + 1;
}

// Second loop: from min to max
while ($counter <= $max) {
    $numbers2 = $numbers2 . $counter . "<br>";
    $counter = $counter + 1;
}
?>
<h3>Results:</h3>
<?php echo $numbers; ?>
<?php echo $numbers2; ?>
