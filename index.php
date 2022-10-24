<?php
  require_once 'connection.php';

  $getData = mysqli_query($conn, "SELECT * FROM mhs");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>mahasiswa</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body class="container-fluid">
    <form action="simpan.php" method="POST" class="row g-3">
      <div class="col-md-6">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" name="nim" id="nim" />
      </div>
      <div class="col-md-6">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" />
      </div>
      <div class="col-md-12">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" />
      </div>
      <div class="col-md-6">
        <label for="nomorhp" class="form-label">Nomor HP</label>
        <input type="text" class="form-control" name="nomorhp" id="nomorhp" />
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="email" />
      </div>

      <div class="col-md-1">
        <button type="button" class="btn btn-primary" type="submit" name="submit">
          Simpan
        </button>
      </div>
    </form>

    <table class="table">
      <thead>
        <tr>
          <th colspan="7">Daftar Mahasiswa</th>
        </tr>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">No HP</th>
          <th scope="col">Email</th>
          <th scope="col" colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>

      <?php
        $num = 1;
        while ($data = mysqli_fetch_array($getData)) {
      ?>
        <tr class="table-row">
            <td><?= $num ?></td>
            <td><?= $data["nama"] ?></td>
            <td><?= $data["alamat"] ?></td>
            <td><?= $data["nohp"] ?></td>
            <td><?= $data["email"] ?></td>
            <td>
              <a>Edit</a>
            </td>
            <td>
              <a>hapus</a>
            </td>
        </tr>
      <?php $num++; ?>
      <?php } ?>  
      </tbody>
    </table>

    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
