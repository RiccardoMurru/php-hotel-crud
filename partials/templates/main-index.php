<?php 
include __DIR__ . '/../home/server.php';
?>

<main class="container d-flex flex-wrap">
    <h1 class="text-center col-12 my-4">Hotel Rooms</h1>
    <?php foreach ($rooms as $room) : ?>
        <div class="col-4">
            <div class="card mb-3">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo "ID Stanza: {$room['id']}" ?></li>
                    <li class="list-group-item"><?php echo "N. Stanza: {$room['room_number']}" ?></li>
                </ul>
                <div class="text-center p-2">
                    <a href="./show.php?id=<?php echo "{$room['id']}"; ?>" class="card-link">Dettagli</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</main>