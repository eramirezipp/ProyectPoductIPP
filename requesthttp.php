<?php
include 'fibonacci.php';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $listvaluefib = fibonacci($_POST["number"]);
    echo implode(", ", $listvaluefib);
}

?>