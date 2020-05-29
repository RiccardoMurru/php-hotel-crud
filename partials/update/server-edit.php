<?php 
include __DIR__ . '/../database.php';

if (empty($_GET['id'])) {
    die('ID non valido');
}

$room_id = $_GET['id'];

$sql = "SELECT * FROM `stanze` WHERE `id` = $room_id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
} elseif ($result) {
    echo 'Nessuna stanza trovata';
} else {
    echo 'Errore query';
}


$conn->close();
?>