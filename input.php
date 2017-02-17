<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Halaman Input</title>
    <style>
    body {
      background-color: rgb(200, 200, 200);
      text-align: center;
    }

    </style>
  </head>
  <body>
    <a href="index.php"> Lihat Data <a/> <br/>
    <h3 style="background-color:yellow">Input Data</h3>
    <form class="" action="input-aksi.php" method="post">
      <table align="center" style="background-color:cyan; text-align:center">
        <tr>
          <td>Nama : </td>
          <td><input type="text" name="nama" value=""></td>
        </tr>
        <tr>
          <td>Alamat : </td>
          <td> <input type="text" name="alamat" value=""> </td>
        </tr>
        <tr>
          <td>Pekerjaan : </td>
          <td> <input type="text" name="pekerjaan" value=""> </td>
        </tr>
        <tr>
          <td></td>
          <td> <input type="submit" value="simpan"> </td>
        </tr>
      </table>
    </form>

  </body>
</html>
