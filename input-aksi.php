<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

$query = mysql_query("INSERT INTO crud1 VALUES ('', '$nama', '$alamat', '$pekerjaan')");

header("location:index.php?pesan=input"); //memberi tahu ke index.php bahwa varuable pesan sudah di input

 ?>
