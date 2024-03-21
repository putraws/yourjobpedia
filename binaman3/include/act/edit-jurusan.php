<?php
$id = $_POST['id'];
$nama = htmlspecialchars($_POST['nama']);
$kode = htmlspecialchars($_POST['kode']);
$tampung = preg_replace("/[^0-9]/", "", $_POST['tampung']);

$stmt_edt = $pdo->prepare("UPDATE `jurusan` SET `nama` = ?, `kode` = ?, `tampung` = ? WHERE `id` = ?");
$success = $stmt_edt->execute([$nama, $kode, $tampung, $id]);
if ($success == true) {
    $response = array('success' => true, 'message' => 'Berhasil Mengedit Jurusan');
} else {
    $response = array('success' => false, 'message' => 'Gagal Mengedit Jurusan');
}
