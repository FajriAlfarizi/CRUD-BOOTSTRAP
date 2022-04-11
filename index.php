<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "dblatihan";

$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

?>


<!DOCTYPE html>
<html>
<head>
    <title>CRUD Mahasiswa + Bootstrap</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
<h1 class="text-center">CRUD Mahasiswa + Bootstrap</h1>
<h2 class="text-center">Data</h2>

<div class="card mt-3">
  <div class="card-header bg-primary text-white">
    Form Input Data Mahasiswa
  </div>
  <div class="card-body">
    <form method="post" action="">
        <div class="form-group">
            <label>Nim</label>
            <input type=text name="tnim" class="form-control" placeholder="Input NIM anda !" required>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type=text name="tnama" class="form-control" placeholder="Input Nama anda !" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="talamat" class="form-control" placeholder="Input Alamat anda !"></textarea>
        </div>
        <div class="form-group">
            <label>Program Studi</label>
            <select class="form-control" name="tprodi">
                <option></option>
                <option value="S1-IT">S1-IT</option>
                <option value="D3-IT">D3-IT</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
        <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>

    </form>
  
<div class="card mt-3">
  <div class="card-header bg-success text-white">
    Daftar Mahasiswa
  </div>
  <div class="card-body">

  <table class="table table-bordered table-striped">
    <tr>
          <th>No.</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Program studi</th>
    </tr>
    <?php
        $no = 1;
        $tampil = mysqli_query($koneksi, "SELECT * from tmhs order by id_mhs desc");
        while($data = mysqli_fetch_array($tampil)) :

    ?>
    <tr>
          <td><?=$no++;?></td>
          <td><?=$data['nim']?></td>
          <td><?=$data['nama']?></td>
          <td><?=$data['alamat']?></td>
          <td><?=$data['prodi']?></td>
    </tr>
    <?php endwhile;?>
  </table>

    

  </div>
</div>

  </div>
</div>

</div>

<sript type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>