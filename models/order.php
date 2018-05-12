<?php
require_once ('db.php');
//RECUPERATION DE DATAS
//fonction permettant de récupérer la liste des commandes
function getOrders() {
    $db = getDb();
    $response = $db->query('SELECT b.*, u.login FROM book AS b JOIN `user` AS u ON user_id = u.id ORDER BY status_id;');
    $datas = $response->fetchAll();
    $response->closeCursor(); // Termine le traitement de la requête
    return $datas;
}
function getOrder($otitle) {
    $db = getDb();
    $response = $db->prepare('SELECT * FROM book WHERE title = :otitle');
    $response->execute(array('title' => $otitle));
    $datas = $response->fetch();
    $response->closeCursor(); // Termine le traitement de la requête
    return $datas;
}
function getOrderById($id) {
    $db = getDb();
    $response = $db->prepare('SELECT * FROM book WHERE id = :id');
    $response->execute(array('id' => $id));
    $datas = $response->fetch();
    $response->closeCursor(); // Termine le traitement de la requête
    return $datas;
}
function checkIfOrder($id){
  $db = getDb();
  $response = $db->prepare('SELECT * FROM book WHERE status_id = 1 AND user_id = :id;');
  $response->execute(array('id' => $id));
  $datas = $response->fetch();
  $response->closeCursor();
  if($datas){
    return $datas;
  }
  else{
    return false;
  }
}
function setOrder($id, $values) {
    $query = 'UPDATE book SET';
    foreach ($values as $name => $value) {
        $query = $query.' '.$name.' = :'.$name.',';
    }
    $query = substr($query, 0, -1).' WHERE id = :id;';
    $db = getDb();
    $response = $db->prepare($query);
    $response->execute(array_merge(array('id' => $id), $values));
    $response->closeCursor(); // Termine le traitement de la requête
}
function payment($id, $status){
    $db = getDb();
    if($status == 1){
      $response = $db->prepare('UPDATE `book` SET `status_id` = 2 WHERE `book`.`id` = :id');
      $response->execute(array('id' => $id));
      $response->closeCursor();
    }
}
function deleteOrder($id) {
    $db = getDb();
    $response = $db->prepare('DELETE FROM book WHERE id = :id;');
    $response->execute(array('id' => $id));
    $response->closeCursor(); // Termine le traitement de la requête
}

function newOrder($values) {
    $query = 'INSERT INTO book SET';
    foreach ($values as $name => $value) {
        $query = $query.' '.$name.' = :'.$name.',';
    }
    $query = substr($query, 0, -1);
    $db = getDb();
    $response = $db->prepare($query);
    $response->execute($values);
    $response->closeCursor(); // Termine le traitement de la requête
}
?>