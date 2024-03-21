<?php
$id = $_POST['id'];

$stmt_ver = $pdo->prepare("UPDATE `mod_data_alumnia` SET `lulus` = ? WHERE `id` = ?");
$success = $stmt_ver->execute(['Sudah Diterima', $id]);
if ($success == true) {
    $response = array('success' => true, 'message' => 'Berhasil Menerima Calon Siswa');
} else {
    $response = array('success' => false, 'message' => 'Berhasil Menerima Calon Siswa');
}
