<?php
global $pdo;
require './config/connect.php';
$id = $_GET['id'];
$sql = 'DELETE FROM `todos` WHERE `id`=?';
$query = $pdo->prepare($sql);
$query->execute([$id]);
header('Location:/');