<?php
require_once ('models/cart.php');
session_start();
if(empty($_SESSION['login']) or $_SESSION['role_id']==1){
    $error = 'Un admin ne peut pas passer de commande';
    header('Location: index');
    exit();
}
else{
    $cartQt = 0;
    $cartOrder = orderForCart($_SESSION['id']);
    $items = cartByOrderId($cartOrder['id']);
    $cartQt = count($items);
    include 'views/cart.php';
}
?>