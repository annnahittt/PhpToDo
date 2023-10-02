<?php

global $pdo;
require 'config/connect.php';
$task = $_POST['task'];
if ($task ==''){
    echo 'empty list';
    exit();
}

$sql = 'INSERT INTO todos(tasks) VALUES (:task)';
$query = $pdo->prepare($sql);
$query->execute(['task'=>$task]);
header('Location: /');

