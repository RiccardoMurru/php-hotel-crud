<?php 
include __DIR__ . '/../../env.php';
include __DIR__ . '/../update/server-edit.php'
?>
<main class="container d-flex flex-column align-items-center">
    <h2 class="my-4">Modifica Stanza</h2>
    <form class="w-50" action="<?php echo $base_path; ?>partials/update/server-update.php" method="POST">
        <div class="form-group">
            <label for="room_number">Numero Stanza</label>
            <input class="form-control"type="text" name="room_number" id="room_number" value="<?php echo $room['room_number']; ?>">
        </div>
        <div class="form-group">
            <label for="floor">Piano</label>
            <input class="form-control"type="text" name="floor" id="floor" value="<?php echo $room['floor']; ?>">
        </div>
        <div class="form-group">
            <label for="beds">Letti</label>
            <input class="form-control"type="text" name="beds" id="beds" value="<?php echo $room['beds']; ?>">
        </div>
        <div class="d-flex justify-content-around">
            <input type="hidden" name="room_id" value="<?php echo $room['id']; ?>">
            <input class="btn btn-outline-primary mt-3" type="submit" value="Modifica">
            <a class="btn btn-outline-danger mt-3" href="<?php echo $base_path ;?>show.php?id=<?php echo $room['id']; ?>"> Annulla</a>
        </div>
    </form>
</main>