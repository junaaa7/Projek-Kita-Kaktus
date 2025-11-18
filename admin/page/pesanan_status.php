<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    die();
}

require '../../db/koneksi.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$id     = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$status = isset($_GET['status']) ? $_GET['status'] : '';

$allowed = ['baru','diproses','selesai','batal'];

if ($id > 0 && in_array($status, $allowed)) {
    $id = (int)$id;
    mysqli_query($koneksi, "UPDATE pesanan SET status='$status' WHERE id='$id'");
}

// setelah update, balik ke halaman pesanan dengan notifikasi
header("Location: pesanan.php?status=updated");
exit;
