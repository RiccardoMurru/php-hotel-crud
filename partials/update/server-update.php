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
        SET `room_number` = ?, `floor` = ?, `beds` = ?, `updated_at` = NOW()
        WHERE `id` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('iiii', $room_number, $floor, $beds, $room_id);
$stmt->execute();


if ($stmt && $stmt->affected_rows > 0) {
    header("Location: $base_path/show.php?id=$room_id");
} elseif ($stmt) {
    echo 'Nessuna stanza modificata';
} else {
    echo 'Errore query';
}

$conn->close();
?>