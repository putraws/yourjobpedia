<?php
$nama = htmlspecialchars($_POST['nama']);
$kuota = preg_replace("/[^0-9]/", "", $_POST['kuota']);

$stmt_add = $pdo->prepare("INSERT INTO `kelas`(`nama`, `kuota`) VALUES (?, ?)");
$success = $stmt_add->execute([$nama, $kuota]);
if ($success == true) {
    $response = array('success' => true, 'message' => 'Berhasil Menambahkan Kelas');
} else {
    $response = array('success' => false, 'message' => 'Gagal Menambahkan Kelas');
}
