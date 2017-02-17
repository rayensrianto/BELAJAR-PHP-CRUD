<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar Crud</title>
  </head>
  <body>
    <div class="judul"> Belajar CRUD PHP Mysql </div>

  </br>
<?php
if(isset ($_GET['pesan'])) {
  $pesan = $_GET['pesan'];
  if($pesan == "input") {
    echo "Data Berhasil Di Input";
  }
  else if($pesan == "update") {
    echo "Data Berhasil Di Update";
  }
  elseif ($pesan == "hapus") {
    echo "Data Berhasil Di Hapus";
  }
}
?>
  </br>
  <a class="tombol" href="input.php"> + Tambah Baru </a>

  <h3>Data User</h3>
  <table border="1" class="table">
    <tr style="background-color:cyan;">
      <th>No</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Pekerjaan</th>
      <th>Opsi</th>
    </tr>
<?php
include "koneksi.php";
$query = mysql_query("SELECT * FROM crud1") or die (mysql_error());
$nomor = 1;
while ($data = mysql_fetch_array($query)) {
?>
    <tr>
      <td style="background-color:black; color:cyan"><?php echo $nomor++; ?></td>
      <td><?php echo $data['nama']; ?></td>
      <td><?php echo $data['alamat']; ?></td>
      <td><?php echo $data['pekerjaan']; ?></td>
      <td style="background-color:yellow">
        <a class="edit" href="edit.php?id= <?php echo $data['id']; ?> " style="background-color:black; color:white">Edit |</a>
        <a class="hapus" href="hapus.php?id= <?php echo $data['id']; ?> "style="background-color:black; color:red">| Hapus</a>
      </td>
    </tr>

<?php
}
?>
  </table>
  </body>
</html>
