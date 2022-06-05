<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.83.1">
  <title>Hotel Santuy</title>

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
      <h1>Tambah Kamar</h1>
      <?php
      echo validation_errors();
      foreach ($kamar as $row) {
        echo form_open('Admin/updateData');

        echo form_label('Nama Kamar');
        $input1 = array(
          'name' => 'namaKamar',
          'id' => 'nama_id',
          'value' => $row['namaKamar'],
          'placeholder' => 'Tambahkan Nama Kamar',
          'class' => 'form-control'
        );
        echo form_input($input1);

        echo form_hidden('id_kamar', $row['id_kamar']);

        echo form_label('Harga Kamar');
        $input2 = array(
          'name' => 'harga',
          'id' => 'harga_id',
          'value' => $row['hargaKamar'],
          'placeholder' => 'Tambahkan Harga Kamar',
          'class' => 'form-control'
        );
        echo form_input($input2);

        echo form_label('Keterangan');
        $input3 = array(
          'name' => 'ket',
          'rows' => '5',
          'cols' => '30',
          'value' => $row['keterangan'],
          'id' => 'area_id',
          'placeholder' => 'Tambahkan Keterangan',
          'class' => 'form-control'
        );
        echo form_textarea($input3);

        echo form_label('Pilih Kelas Kamar');
        foreach ($query->result_array() as $row) {
          $options[$row['idKelas']] = $row['namaKelas'];
        }
        $input4 = array(
          'Choose' => 'Choose',
          'S-Class' => 'S-Class',
          'A-Class' => 'A-Class',
          'B-Class' => 'B-Class',
          'C-Class' => 'C-Class',
          'D-Class' => 'D-Class'
        );
        echo form_dropdown('kelas', $options, set_value('kelas'), "class='form-control'");
        echo "</br>";

        echo form_label('Pilih Akses Kamar') . "</br>";
        echo form_radio('akses', 'Khusus Pria', "class='form-check-input'") . " Khusus Pria </br>";
        echo form_radio('akses', 'Khusus Wanita', "class='form-check-input'") . " Khusus Wanita </br>";
        echo form_radio('akses', 'Akses Bebas', "class='form-check-input'") . " Akses Bebas </br></br>";

        echo form_label('End-User License Agreement') . '</br>';
        $input7 = array(
          'name' => 'eula',
          'value' => 'Setuju'
        );
        echo form_label(form_checkbox($input7) . "Saya Sudah Mendapatkan Persetujuan Admin") . '</br></br>';

        echo form_submit('submit', 'Submit', "class='btn btn-primary'");
        echo form_close();
      }
      ?>
    </div>
  </main>


  <script src="<?php echo base_url() . '/assets/dist/js/bootstrap.bundle.min.js' ?>"></script>


</body>

</html>