<?php
include __DIR__ . '/../../env.php';
include __DIR__ . '/../home/server.php';

// alerts
if (!empty($_GET['del'])) { ?>
    <div class="alert alert-success text-center">
        Stanza eliminata correttamente.
    </div>
<?php } ?>

<main class="container d-flex flex-wrap">
    <h1 class="text-center col-12 my-4">Hotel Rooms</h1>
    <?php foreach ($rooms as $room) : ?>
        <div class="col-4">
            <div class="card mb-3">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo "ID Stanza: {$room['id']}"; ?></li>
                    <li class="list-group-item"><?php echo "N. Stanza: {$room['room_number']}"; ?></li>
                </ul>
                <div class="text-center d-flex justify-content-around align-items-center p-2">
                    <a class="btn btn-sm btn-outline-info" href="<?php echo $base_path; ?>show.php?id=<?php echo "{$room['id']}"; ?>">Dettagli</a>
                    <a class="btn btn-sm btn-outline-primary" href="<?php echo $base_path; ?>edit.php?id=<?php echo "{$room['id']}"; ?>">Modifica</a>
                    <form action="<?php echo $base_path; ?>partials/delete/server.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                        <input class="btn btn-sm btn-outline-danger" type="submit" value="Elimina">
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</main>