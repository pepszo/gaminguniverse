<?php
$title='Ajouter un jeu';
ob_start();
?>
<div class="container">
  <br/>
  <br/>
  <h2>Ajouter un jeu</h2>
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
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        
        <button type="submit" class="btn btn-info">Enregistrer</button>
    </form>
</div>
<?php
$content = ob_get_clean();
include 'includes/layout.php';
?>
