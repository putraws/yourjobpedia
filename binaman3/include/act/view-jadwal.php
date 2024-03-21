<?php
$id = $_POST['id'];
$stmt_view = $pdo->prepare("SELECT * FROM `jadwal_tes` WHERE `jadwal_tes`.`id` = :id");
$stmt_view->execute(['id' => $id]);
$viw = $stmt_view->fetch(PDO::FETCH_ASSOC);

$response = array('success' => true) + $viw;
