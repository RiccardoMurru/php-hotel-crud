<?php 

include __DIR__ . '/../database.php';
// SQL query homepage
$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    // loop per associare a row ogni riga risultato query 
    while ($row = $result->fetch_assoc() ) {
        // inserisco in array i dati di row
        $rooms[] = $row;
    }
} elseif ($result) {
    echo 'Nessun risultato';
} else {
    echo 'Errore nella query';
}

$conn->close();
?>