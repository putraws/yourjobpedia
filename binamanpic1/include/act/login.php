<?php
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

$stmt = $pdo->prepare("SELECT * FROM `pengguna` WHERE `user` = :username");
$stmt->execute(['username' => $username]);
$row = $stmt->fetch();

$hash_pass = $row['password'];
if (password_verify($password, $hash_pass)) {
    $lastlog = date("Y-m-d H:i:s");
    $stmt_log = $pdo->prepare("UPDATE `pengguna` SET `lastlog` = ? WHERE `user` = ?");
    $stmt_log->execute([$lastlog, $username,]);


    $_SESSION['login'] = array('id' => $row['UserId']);
    $response = array('success' => true, 'message' => 'Login Berhasil');
} else {
    $response = array('success' => false, 'message' => 'Login Gagal');
}
