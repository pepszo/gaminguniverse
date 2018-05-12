<?php
session_start();
require_once ('models/order.php');
if(empty($_SESSION['login']) or $_SESSION['role_id']!=1){
    $error='Espace reservé aux admin';
    header('Location: index');
    exit();
}
else{
  $orders = getOrders();
  include 'views/order.php';
}
?>