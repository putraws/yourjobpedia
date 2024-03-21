<?php
$id_ruangan = htmlspecialchars($_POST['id_ruangan']);
$sesi = preg_replace("/[^0-9]/", "", $_POST['sesi']);
$tanggal = htmlspecialchars($_POST['tanggal']);
$jam = htmlspecialchars($_POST['jam']);

$stmt_add = $pdo->prepare("INSERT INTO `jadwal_tes`(`sesi`, `tanggal`, `jam`, `id_ruangan`) VALUES (?, ?, ?, ?)");
$success = $stmt_add->execute([$sesi, $tanggal, $jam, $id_ruangan]);
if ($success == true) {
    $response = array('success' => true, 'message' => 'Berhasil Menambahkan Jadwal');
} else {
    $response = array('success' => false, 'message' => 'Gagal Menambahkan Jadwal');
}
