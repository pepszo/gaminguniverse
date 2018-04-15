<?php
require 'models/game.php';
session_start();
if(empty($_SESSION['login']) or strtolower($_SESSION['login'])!='admin'){
    header('Location: index');
    exit();
}
if(!empty($_POST['id']))
{
  $gtitle = $_POST['gtitle'];
  $price = $_POST['price'];
  $description = $_POST['description'];    
  $values = array('title' => $gtitle, 'price' => $price, 'description' => $description);
  setGame($_POST['id'], $values);
  header('Location: game_tool');
  exit();
}
?>