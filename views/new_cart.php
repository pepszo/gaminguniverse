<?php
ob_start();
?>
</br></br>
  <div class="container">
  <h1 class="display-4">AH! Visiblement vous n'aviez pas de panier!</h1>
    <hr class="my-4">
  <p class="lead">Un panier vient d'être créé, vous pouvez retourner à la liste des jeux.</p>
  <a class="btn btn-primary btn-lg" href="shop" role="button">Boutique</a>
  </div>

<?php
$title = 'Nouveau panier';
$content= ob_get_clean();
include 'includes/layout.php';
?>