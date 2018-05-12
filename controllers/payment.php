<?php
require_once ('models/order.php');
session_start();
if(empty($_SESSION['login']) or $_SESSION['role_id']==1){
    header('Location: index');
    exit();
}

else{
    $payed = checkIfOrder($_SESSION['id']);
    include 'views/payment.php';
}
?>