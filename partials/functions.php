<?php 

// select all records from a table

function selectALL($conn, $table) {
    $sql = "SELECT * FROM `$table`";
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        // loop per associare a row ogni riga risultato query 
        while ($row = $result->fetch_assoc() ) {
            // inserisco in array i dati di row
            $records[] = $row;
        }
    } elseif ($result) {
        echo 'Nessun risultato';
    } else {
        echo 'Errore nella query';
    }
    
    $conn->close();

    return $records;
}

// select with id

function selectByID($conn, $table, $id) {
    $sql = "SELECT * FROM `$table` WHERE `id` = $id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $record = $result->fetch_assoc();
    } elseif ($result) {
        echo "Nessun risultato";
    } else {
        echo "Errore query";
    }

    $conn->close();

    return $record;
}

?>