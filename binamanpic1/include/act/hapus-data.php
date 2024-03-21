<?php
$id = $_POST['id'];
$col = htmlspecialchars($_POST['col']);
$table = htmlspecialchars($_POST['table']);

// Validate and sanitize the table and column names if necessary

// Construct the SQL query
$sql = "DELETE FROM $table WHERE $col = :id";

// Prepare the statement
$stmt_del = $pdo->prepare($sql);

// Bind the parameter
$stmt_del->bindParam(':id', $id, PDO::PARAM_INT);

// Execute the query
$success = $stmt_del->execute();

// Check the result
if ($success) {
    $response = array('success' => true, 'message' => 'Berhasil Menghapus Data');
} else {
    $response = array('success' => false, 'message' => 'Gagal Menghapus Data');
}
