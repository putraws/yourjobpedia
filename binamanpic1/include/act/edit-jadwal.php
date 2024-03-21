<?php
$id = $_POST['id'];
$id_ruangan = htmlspecialchars($_POST['id_ruangan']);
$sesi = preg_replace("/[^0-9]/", "", $_POST['sesi']);
$tanggal = htmlspecialchars($_POST['tanggal']);
$jam = htmlspecialchars($_POST['jam']);

$stmt_edt = $pdo->prepare("UPDATE `jadwal_tes` SET `sesi` = ?, `tanggal` = ?, `jam` = ?, `id_ruangan` = ? WHERE `id` = ?");
$success = $stmt_edt->execute([$sesi, $tanggal, $jam, $id_ruangan, $id]);
if ($success == true) {
    $response = array('success' => true, 'message' => 'Berhasil Mengedit Jadwal');
} else {
    $response = array('success' => false, 'message' => 'Gagal Mengedit Jadwal');
}
