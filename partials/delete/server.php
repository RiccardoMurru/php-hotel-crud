<?php 
// connessione db
include __DIR__ . '/../database.php';

if (empty($_POST['id'])) {
    die('ID non valido');
}

$room_id = $_POST['id'];

$sql = "DELETE FROM `stanze` WHERE `id` = $room_id";
$result = $conn->query($sql);

if ($result && $conn->affected_rows > 0) {
    header("Location: $base_path?del=y");
} elseif ($result) {
    echo 'Nessuna stanza eliminata';
} else {
    echo 'Errore in query';
}
?>