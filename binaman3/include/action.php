<?php
session_start();
// require_once('../include/config.php');
require_once('config.php');
header('Content-Type: application/json');

if (isset($_POST['aksi'])) {
    if (file_exists("act/" . $_POST['aksi'] . ".php")) {
        include("act/" . $_POST['aksi'] . ".php");
    } else {
        $response = array('success' => false, 'message' => 'Error 404 No Action Found');
    }
} else {
    $response = array('success' => false, 'message' => 'Error 404 No Action Found');
}

$pdo = null;

echo json_encode($response);
