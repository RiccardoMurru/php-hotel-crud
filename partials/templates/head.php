<?php 
include __DIR__ . '/../../env.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel DB</title>
    <link rel="stylesheet" href="<?php echo $base_path; ?>dist/css/main.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo $base_path; ?>">Hotel</a>
            <div class="ml-auto">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="<?php echo $base_path; ?>">Home</a>
                    <a class="nav-item nav-link" href="<?php echo $base_path . 'create.php'; ?>">Nuova Stanza</a>
                </div>
            </div>
        </nav>
    </header>