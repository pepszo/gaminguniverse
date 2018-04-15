<?php
require 'models/game.php';
session_start();

$games = getGames();
include 'views/shop.php';
?>