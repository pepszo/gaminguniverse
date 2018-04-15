<?php
ob_start();
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Apercu</th>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Prix</th>
            <th style="text-align: right" scope="col"><a class="btn btn-success" href="add_game_form" role="button">Ajouter un jeu</a></th>
        </tr>
    </thead>
    <tbody>
      <?php foreach($games as $game):?>
      <tr>
          <td><img src="/img/games/game<?=$game['id']?>" style="width: 3rem;"/></td>
          <th scope="row"><?=$game['id']?></th>
          <td><?=$game['title']?></td>
          <td><?=$game['price']?>€</td>
          <td>
              <div class="row">
                  <form action="game">
                      <input type="hidden" name="id" value=<?=$game['id']?>>
                      <button class="btn btn-outline-success" type="submit">Editer</button>
                  </form>
                  &nbsp;
                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal<?= $game['id']?>">
                      Supprimer
                  </button>
                  <?php include 'includes/delete_game.php' ?>
                  &nbsp;
                  <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalCenter<?= $game['id']?>">
                  Ajoutez une image
                  </button>
                   <?php include 'includes/img_jeux.php' ?>      
              </div>
          </td>

      </tr>
      <?php endforeach ?>
    </tbody>
</table>
<?php
$title = 'Gestion des jeux';
$content = ob_get_clean();
include 'includes/layout.php';
?>