<?php
    $total = 0;
ob_start(); ?>
<div class="container">
  <table class="table">
      <thead>
          <tr>
              <th scope="col">Apercu</th>
              <th scope="col">Titre</th>
              <th scope="col" >Prix</th>
              <th scope="col">Annuler</th>
          </tr>
      </thead>
      <tbody>
        <?php foreach($items as $item):?>
          <tr>
              <td><img style="width: 2rem; text-align: center;" src="/img/games/game<?=$item['item_id']?>.jpg" alt="" ></td>
              <td><?=$item['title']?></td>
              <td><?=$item['price']?>€</td>
              <td>
                <form method="get" action="delete_cart">
                  <input name="id" type="hidden" value="<?=$item['id']?>">
                  &nbsp;
                  <input type="submit" value="&nbsp;X&nbsp;  " class="btn btn-outline-danger">
                </form>
              </td>
          </tr>
          <?php $total = $total + $item['price'];?>
        <?php endforeach ?>
      </tbody>
  </table>
  <p class="font-weight-bold" style ="text-align: right">TOTAL&nbsp;&nbsp;</p>
  <p style ="text-align: right"><?=$total?>€&nbsp;&nbsp;</p>

  <form style="text-align: right" method="get" action="">
    <input name="id" type="hidden" value="<?=$item['book_id']?>">
    <input type="submit" value="Payer" class="btn btn-info">
  </form>
</div>

<?php
$title = 'Panier';
$content1 = ob_get_clean();
ob_start();
?>
</br></br>
  <div class="container">
  <h1 class="display-4">Votre panier est vide!</h1>
    <hr class="my-4">
  <p class="lead">Ajoutez-en depuis la liste des jeux!</p>
  <a class="btn btn-primary btn-lg" href="shop" role="button">Boutique</a>
  </div>

<?php
$title = 'Panier';
$content2 = ob_get_clean();
//isset item ajouté car bug apres le payement pour affichage du panier
if($cartQt != 0){
    $content = $content1;
}
else{
    $content = $content2;
}
include 'includes/layout.php';
?>