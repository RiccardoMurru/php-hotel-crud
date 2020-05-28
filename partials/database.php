<?php 
// dati connessione
include __DIR__ . '/../env.php';

// connessione
$conn = new mysqli($server, $user, $pwd, $database);

// check connessione
if ($conn->connect_error) {
    die("Connessione fallita: $conn->connect_error");
}

?>