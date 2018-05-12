<?php 
    $title= 'Details';
    $total = 0;
    ob_start();
?>
<div class="container">
      <table class="table">
      <thead>
          <tr>
              <th scope="col">Apercu</th>
              <th scope="col">Titre</th>
              <th scope="col"  >Prix</th>
          </tr>
      </thead>
      <tbody>
        <?php foreach($sorders as $sorder):?>
          <tr>
              <td><img style="width: 2rem; text-align: center;" src="/img/games/game<?=$sorder['item_id']?>.jpg" alt="" ></td>
              <td><?=$sorder['title']?></td>
              <td><?=$sorder['price']?>€</td>
              <td>
                <form method="get" action="delete_cart">
                  <input name="id" type="hidden" value="<?=$sorder['id']?>">
                  &nbsp;
                </form>
              </td>
          </tr>
          <?php $total = $total + $sorder['price'];?>
        <?php endforeach ?>
      </tbody>
  </table>
    <p class="font-weight-bold" style ="text-align: right">TOTAL&nbsp;&nbsp;</p>
  <p style ="text-align: right"><?=$total?>€&nbsp;&nbsp;</p>
</div>
<?php 
    $content = ob_get_clean();
    include 'includes/layout.php'      
?>