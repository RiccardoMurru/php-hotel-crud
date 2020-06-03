<?php 
include __DIR__ . '/../../env.php';
?>

<main class="container d-flex flex-column align-items-center">
    <h2 class="my-4">Crea nuova stanza</h2>
    <form class="w-50" action="<?php echo $base_path; ?>partials/create/server.php" method="POST">
        <div class="form-group">
            <label for="room_number">Numero Stanza</label>
            <input class="form-control"type="text" name="room_number" id="room_number" placeholder="Inserisci il numero Stanza">
        </div>
        <div class="form-group">
            <label for="floor">Piano</label>
            <input class="form-control"type="text" name="floor" id="floor" placeholder="Inserisci il piano">
        </div>
        <div class="form-group">
            <label for="beds">Letti</label>
            <input class="form-control"type="text" name="beds" id="beds" placeholder="Inserisci il numero letti">
        </div>
        <div class="d-flex justify-content-around">
            <input class="btn btn-outline-primary mt-3" type="submit" value="Crea Stanza">
            <a class="btn btn-outline-danger mt-3" href="<?php echo $base_path ;?>">Annulla</a>
        </div>
    </form>
</main>