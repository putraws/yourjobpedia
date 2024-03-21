<?php
$id = $_POST['id'];
$stmt_view = $pdo->prepare("SELECT * FROM `kelas` WHERE `kelas`.`id` = :id");
$stmt_view->execute(['id' => $id]);
$viw = $stmt_view->fetch();

$response = array('success' => true, 'nama' => $viw['nama'], 'kuota' => $viw['kuota']);
