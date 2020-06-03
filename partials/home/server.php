<?php 
include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';

// SQL query homepage

$rooms = selectALL($conn, 'stanze');

?>