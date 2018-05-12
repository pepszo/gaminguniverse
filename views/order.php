<?php
ob_start();
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Commande n°</th>
            <th scope="col">Client</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
      <?php foreach($orders as $order):?>
      <tr>
          <th scope="row">#<?=$order['id']?></th>
          <td><?=$order['login']?></td>
          <td><?php if($order['status_id']==1){
                      echo '<button class="btn btn-outline-info" type="submit" disabled>En attente</button>';
                    }
                    else{
                      echo '<button class="btn btn-outline-success" type="submit" disabled>Payée</button>';
                    }?></td>
          
          <td>
              <div class="row">
                <form method="get" action="order_detail">
                    <input type="hidden" name="id" value=<?=$order['id']?>>
                    <input type="hidden" name="login" value=<?=$order['login']?>>
                    <button type="submit" class="btn btn-info">Détails</button>
                </form>
                &nbsp;
                <form method="get" action="change_status">
                    <input type="hidden" name="id" value=<?=$order['id']?>>
                    <input type="hidden" name="status" value=<?=$order['status_id']?>>
                </form>
              </div>
          </td>

      </tr>
      <?php endforeach ?>
    </tbody>
</table>
<?php
$title = 'Gestion des commandes';
$content = ob_get_clean();
include 'includes/layout.php';
?>