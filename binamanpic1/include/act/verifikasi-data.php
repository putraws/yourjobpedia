<?php
$id = $_POST['id'];

$stmt_ver = $pdo->prepare("UPDATE `mod_data_alumnia` SET `valid` = ?, `tahap` = ? WHERE `id` = ?");
$success = $stmt_ver->execute(['Sudah Diverifikasi', 3, $id]);
if ($success == true) {
    $response = array('success' => true, 'message' => 'Berhasil Memverifikasi');
} else {
    $response = array('success' => false, 'message' => 'Gagal Memverifikasi');
}
