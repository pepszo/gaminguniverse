<?php
session_start();
require_once ('models/cart.php');
if(empty($_SESSION['login']) or $_SESSION['role_id']!=1){
    $error='Espace reservé aux admins';
    header('Location: index');
    exit();
}
else{
  $sorders = cartByOrderId($_GET['id']);
  include 'views/order_detail.php';
}
?>