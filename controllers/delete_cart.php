<?php
require 'models/cart.php';
session_start();
if(empty($_SESSION['login']) or $_SESSION['role_id']==1){

    header('Location: index');
    exit();
}
if(!empty($_GET['id']))
{
    $error='';
    removeFromId($_GET['id']);
    $cartOrder = orderForCart($_SESSION['id']);
    header('Location: cart');
    exit();
}
?>