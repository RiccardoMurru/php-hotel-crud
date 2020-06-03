<?php 
include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';

if (empty($_GET['id'])) {
    die('ID non valido');
}

$room_id = $_GET['id'];

$room = selectByID($conn, 'stanze', $room_id);

?>