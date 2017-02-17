<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Halaman Edit</title>
  </head>
  <body>
    <h3>Edit Data</h3> <br>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $query_mysql = mysql_query("SELECT * FROM crud1 WHERE id ='$id'") or die(mysql_error());
    $nomor = 1;
    while ($data = mysql_fetch_array($query_mysql)) {
      # code...
    ?>
    <form class="" action="update.php" method="post">
      <table>
        <tr>
          <td> Nama </td>
          <td> <input type="hidden" name="id" value=" <?php echo $data['id'] ?> ">
          <input type="text" name="nama" value=" <?php echo $data['nama'] ?> "> </td>
        </tr>
        <tr>
          <td> Alamat </td>
          <td> <input type="text" name="alamat" value=" <?php echo $data['alamat'] ?>"> </td>
        </tr>
        <tr>
          <td>
            pekerjaan
          </td>
          <td>
            <input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>">
          </td>
        </tr>
        <tr>
          <td></td>
          <td> <input type="submit" value="Simpan"> </td>
        </tr>
      </table>
    </form>
    <?php
    }
     ?>

  </body>
</html>
