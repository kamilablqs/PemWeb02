<?php
require_once 'dbkoneksi.php';

$iddel = $_GETp['iddel'];
$query = "DELETE FROM produk WHERE id = ?";
$delete = $dbh->prepare($query);
$delete->execute([$iddel]);
header('location:list_produk.php');
?>
