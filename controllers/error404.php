<?php 
session_start();
http_response_code(404);
include 'views/error404.php';