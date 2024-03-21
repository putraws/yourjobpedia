<?php
$nama = htmlspecialchars($_POST['nama']);
$dari = htmlspecialchars($_POST['dari']);
$sampai = htmlspecialchars($_POST['sampai']);

$stmt_add = $pdo->prepare("INSERT INTO `gelombang_reg`(`nama`, `dari`, `sampai`) VALUES (?, ?, ?)");
$success = $stmt_add->execute([$nama, $dari, $sampai]);
if ($success == true) {
    $response = array('success' => true, 'message' => 'Berhasil Menambahkan Gelombang Pendaftaran');
} else {
    $response = array('success' => false, 'message' => 'Gagal Menambahkan Gelombang Pendaftaran');
}
