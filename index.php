<?php
$cities = array("Amsterdam", "San Francisco", "Berlin",
                "N123ew York", "Tokyo", "London","Jaipur");

header('Content-Type: application/json');
echo json_encode($cities, JSON_PRETTY_PRINT);
?>
