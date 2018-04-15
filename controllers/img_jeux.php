<?php
require 'models/game.php';
session_start();
if(empty($_SESSION['login']) or strtolower($_SESSION['login'])!='admin'){
    header('Location: index');
    exit();
}
else{
  if(isset($_FILES['file'])){
    $file = $_FILES['file'];

    //propriétés du fichier
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $id = $_POST['id'];
    $error = $file['error'];

    //permissions
    $file_ext = explode('.',$file_name);
    $file_ext = strtolower(end($file_ext));

    $allowed = array('jpg');
    if(in_array($file_ext, $allowed)){
      if($error === 0){
        if($file_size <= 2097152){
          $file_destination = 'img/games/game' . $id . '.' . $file_ext;
          echo $file_destination;
          if(move_uploaded_file($file_tmp, $file_destination)){
            header('Location:game_tool');
          }
          else{
            $error = 'Erreur lors de l\'upload';
          }
        }
        else{
          $error = 'Fichier trop lourd';
        }
      }
    }
    else{
      $error = 'Votre fichier doit être sous .jpg pour être importé';
    }
  }

}
$games = getGames();
include 'views/game_tool.php';
?>

