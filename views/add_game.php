<?php
$title='Ajouter un jeu';
ob_start();
?>
<div class="container">
  <br/>
  <br/>
  <h2>Ajouter un jeu</h2></br>
    <form method="post" action="add_game">
        <div class="form-group">
            <label for="gtitle">Titre du jeu</label>
            <input type="text" class="form-control" id="gtitle" name="gtitle">
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="price">Description</label>
            <input type="text" class="form-control" id="Description" name="Description">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
<?php
$content = ob_get_clean();
include 'includes/layout.php';
?>
