<?php
    ob_start();
$title = 'Paiement';
payment($payed['id'],$payed['status_id']);
?>
</br></br>
  <div class="container">
  <h1 class="display-4">Paiement effectué!</h1>
  <h2 class="display-4">Merci d'avoir acheté chez Gaming Universe</h2>
    <hr class="my-4">
  <p class="lead">Retour à la liste des jeux</p>
  <a class="btn btn-primary btn-lg" href="shop" role="button">Boutique</a>
  </div>
<?php $content = ob_get_clean();
include 'includes/layout.php';
?>
