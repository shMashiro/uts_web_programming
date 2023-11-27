<?php
require_once '../koneksi/koneksi.php';
$id = $_POST['id'];

try {
    $sql = 'DELETE FROM data_pendaftar WHERE id = ?';
    $qonnect = $database_connection->prepare($sql);
    $qonnect->execute([$id]);
    echo"data deleted Succesfully!  ";
} catch (PDOException $err) {
    die("error delete data: " . $err->getMessage());

}
?>