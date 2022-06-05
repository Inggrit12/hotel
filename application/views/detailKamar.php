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
      <h1>Detail Kamar</h1>
      <div class="container-fluid">
        <h1 style="text-align:center;">Detail</h1>
        <table class="table table-bordered table-dark">
        <?php foreach (kamar as $row): ?>
        <tr>
          <th scope="row">Nama Kamar</th>
          <td><?php echo $mtr['id'] ?></td>
        </tr>