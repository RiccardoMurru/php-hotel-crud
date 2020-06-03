<?php 
// connessione db
include __DIR__ . '/../database.php';

if (empty($_POST['id'])) {
    die('ID non valido');
}

$room_id = $_POST['id'];

$sql = "DELETE FROM `stanze` WHERE `id` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $room_id);
$stmt->execute();

if ($stmt && $stmt->affected_rows > 0) {
    header("Location: $base_path?del=y");
} elseif ($stmt) {
    echo 'Nessuna stanza eliminata';
} else {
    echo 'Errore in query';
}
?>