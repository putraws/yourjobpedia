<?php
$id = $_POST['id'];
$nama = htmlspecialchars($_POST['nama']);
$dari = htmlspecialchars($_POST['dari']);
$sampai = htmlspecialchars($_POST['sampai']);

$stmt_edt = $pdo->prepare("UPDATE `gelombang_reg` SET `nama` = ?, `dari` = ?, `sampai` = ? WHERE `id` = ?");
$success = $stmt_edt->execute([$nama, $dari, $sampai, $id]);
if ($success == true) {
    $response = array('success' => true, 'message' => 'Berhasil Mengedit Gelombang Pendaftaran');
} else {
    $response = array('success' => false, 'message' => 'Gagal Mengedit Gelombang Pendaftaran');
}
