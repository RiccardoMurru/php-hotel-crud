<?php 
include __DIR__ . '/../database.php';

if (empty($_POST['room_number']) || empty($_POST['floor']) || empty($_POST['beds']) ) {
    die('Errore creazione stanza');
}

$room_number = $_POST['room_number'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];


$sql = "INSERT INTO `stanze` (`room_number`, `floor`, `beds`, `created_at`, `updated_at`) 
        VALUES (?, ?, ?, NOW(), NOW())";

$stmt = $conn->prepare($sql);

$stmt->bind_param('iii', $room_number, $floor, $beds);
$stmt->execute();


if ($stmt && $stmt->insert_id) {
    $room_id = $stmt->insert_id;
    header("Location: $base_path" . "show.php?id=$room_id");
} else {
    die('Errore creazione');
}

$conn->close();
?>