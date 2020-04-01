<?php 

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');

$conn = new PDO("mysql:host=localhost;dbname=first_reactjs_app;", "root", "");

?>