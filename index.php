<?php
$cities = array("Amsterdam", "San Francisco", "Berlin",
                "New York", "Tokyo", "London","Jaipur");

header('Content-Type: application/json');
echo json_encode($cities, JSON_PRETTY_PRINT);
?>
