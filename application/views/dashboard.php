<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.83.1">
  <title>Hotel Jungkook</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">



  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() . '/assets/dist/css/bootstrap.min.css' ?>" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="navbar-top-fixed.css" rel="stylesheet">
</head>

<body>


  <main class="container">
    <div class="bg-light p-5 rounded">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Kamar</th>
            <th scope="col">Kelas Kamar</th>
            <th scope="col">Fasilitas</th>
            <th scope="col">Pelayanan</th>
            <th scope="col">Kebersihan</th>
            <th scope="col">Keamanan</th>
            <th scope="col">Akses Kamar</th>
            <th scope="col">Internet</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Harga Kamar</th>
            <th class="text-center" colspan="2" scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($query->result_array() as $row) {
            echo "<tr>";
            echo "<th>" . $no++ . "</th>";
            echo "<th>" . $row['namaKamar'] . "</th>";
            echo "<th>" . $row['namaKelas'] . "</th>";
            echo "<th>" . $row['fasilitas'] . "</th>";
            echo "<th>" . $row['pelayanan'] . "</th>";
            echo "<th>" . $row['kebersihan'] . "</th>";
            echo "<th>" . $row['keamanan'] . "</th>";
            echo "<th>" . $row['akses'] . "</th>";
            echo "<th>" . $row['internet'] . "</th>";
            echo "<th>" . $row['keterangan'] . "</th>";
            echo "<th>" . $row['hargaKamar'] . "</th>";
            echo "<th><button type='button' class='btn btn-warning display-4'>" . anchor('Admin/editkamar/' . $row['id_kamar'], 'Edit') . "</button></th>";
            echo "<th><button type='button' class='btn btn-danger display-4'>" . anchor('Admin/deletekamar/' . $row['id_kamar'], 'Delete') . "</button></th>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </main>


  <script src="<?php echo base_url() . '/assets/dist/js/bootstrap.bundle.min.js' ?>"></script>


</body>

</html>