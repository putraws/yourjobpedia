<?php
$id = $_POST['id'];
$nama = htmlspecialchars($_POST['nama']);
$kuota = preg_replace("/[^0-9]/", "", $_POST['kuota']);

$stmt_edt = $pdo->prepare("UPDATE `kelas` SET `nama` = ?, `kuota` = ? WHERE `id` = ?");
$success = $stmt_edt->execute([$nama, $kuota, $id]);
if ($success == true) {
    $response = array('success' => true, 'message' => 'Berhasil Mengedit Kelas');
} else {
    $response = array('success' => false, 'message' => 'Gagal Mengedit Kelas');
}
