<?php 
include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';

$room_id = $_GET['id'];

$room = selectByID($conn, 'stanze', $room_id);

?>