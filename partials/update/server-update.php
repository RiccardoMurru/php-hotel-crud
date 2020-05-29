<?php 
include __DIR__ . '/../database.php';

if (empty($_POST['room_id'])) {
    die('ID non valido');
}

$room_id = $_POST['room_id'];
$room_number = $_POST['room_number'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];


$sql = "UPDATE `stanze` 
        SET `room_number` = $room_number, `floor` = $floor, `beds` = $beds
        WHERE `id` = $room_id";
$result = $conn->query($sql);

if ($result && $conn->affected_rows > 0) {
    header("Location: $base_path/show.php?id=$room_id");
} elseif ($result) {
    echo 'Nessuna stanza modificata';
} else {
    echo 'Errore query';
}

$conn->close();
?>