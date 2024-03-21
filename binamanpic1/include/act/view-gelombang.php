<?php
$id = $_POST['id'];
$stmt_view = $pdo->prepare("SELECT * FROM `gelombang_reg` WHERE `gelombang_reg`.`id` = :id");
$stmt_view->execute(['id' => $id]);
$viw = $stmt_view->fetch();

$response = array('success' => true, 'nama' => $viw['nama'], 'dari' => $viw['dari'], 'sampai' => $viw['sampai']);
