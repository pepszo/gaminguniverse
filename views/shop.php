<?php
ob_start();
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Apercu</th>
            <th scope="col">Titre</th>
            <th scope="col">Prix</th>
        </tr>
    </thead>
    <tbody>
      <?php foreach($games as $game):?>
      <tr>
          <td><img src="/img/games/game<?=$game['id']?>" style="width: 3rem;"/></td>
          <td><?=$game['title']?></td>
          <td><?=$game['price']?>€</td>
          <td>
              <div class="row">
                  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#description<?= $game['id']?>">
                  Voir la description          
                  </button>
                  <?php include 'includes/description.php' ?>
                  &nbsp;
                  <?php
                    ob_start();
                  ?>
                  <form action="">
                      <input type="hidden" name="id" value=<?=$game['id']?>>
                      <button class="btn btn-outline-success" type="submit">Ajoutez au panier</button>
                  </form>
                  <?php
                  $panier = ob_get_clean();
                  if(empty($_SESSION['login']) or strtolower($_SESSION['login'])!='admin'){
                  echo $panier;
                  }
                  ?>
              </div>
          </td>
      </tr>
      <?php endforeach ?>
    </tbody>
</table>
<?php
$title = 'Boutique';
$content = ob_get_clean();
include 'includes/layout.php';
?>