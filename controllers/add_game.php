<?php
require 'models/game.php';
session_start();
if(empty($_SESSION['login']) or strtolower($_SESSION['login'])!="admin"){
    header('Location: index');
    exit();
}
else{
    if(!empty($_POST['gtitle']) and !empty($_POST['price'])){
        $gtitle = $_POST['gtitle']; 
        $price = $_POST['price'];
                $values = array('title' => $gtitle, 'price' => $price);
                $game = newGame($values);
                header('Location: game_tool');    
                }
                exit();
        }
?>