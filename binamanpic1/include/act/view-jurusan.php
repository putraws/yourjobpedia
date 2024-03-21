<?php
$idjur = $_POST['id'];
$stmt_view = $pdo->prepare("SELECT * FROM `jurusan` WHERE `jurusan`.`id` = :id");
$stmt_view->execute(['id' => $idjur]);
$viw = $stmt_view->fetch();

$response = array('success' => true, 'nama' => $viw['nama'], 'kode' => $viw['kode'], 'tampung' => $viw['tampung']);
