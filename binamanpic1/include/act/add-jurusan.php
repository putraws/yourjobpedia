<?php
$nama = htmlspecialchars($_POST['nama']);
$kode = htmlspecialchars($_POST['kode']);
$tampung = preg_replace("/[^0-9]/", "", $_POST['tampung']);

$stmt_add = $pdo->prepare("INSERT INTO `jurusan`(`nama`, `kode`, `tampung`) VALUES (?, ?, ?)");
$success = $stmt_add->execute([$nama, $kode, $tampung]);
if ($success == true) {
    $response = array('success' => true, 'message' => 'Berhasil Menambahkan Jurusan');
} else {
    $response = array('success' => false, 'message' => 'Gagal Menambahkan Jurusan');
}
