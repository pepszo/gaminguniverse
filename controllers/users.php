<?php
require 'models/user.php';
session_start();
if(empty($_SESSION['login']) or strtolower($_SESSION['login'])!='admin'){
    header('Location: index');
    exit();
}
$users = getUsers();
include 'views/users.php';
?>