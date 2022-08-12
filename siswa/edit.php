<?php

include "functions.php";


$id = @$_GET['id'];
$con = mysqli_connect("localhost", "root", "", "spp") or die(mysqli_error());


//query data penduduk

$result = mysqli_query($con, "SELECT * FROM siswa WHERE nisn = '$id'"); 

while($data = mysqli_fetch_array($result))
{
    ?>


<!DOCTYPE html>
<html style="margin: -32px;height: 263px;width: -273px;padding: -300px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PEMBAYARAN SPP</title>
    <link rel="stylesheet" href="<?=base_url('assetss/assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/fonts/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/css/Fixed-navbar-starting-with-transparency-1.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/css/Fixed-navbar-starting-with-transparency.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/css/styles.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/css/tabela-mloureiro1973.css'); ?>">
</head>

<body style="margin: 173px;padding: -25px;height: 675px;width: 670px;">
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-transparency" style="background-color: #f3fbff;height: 13px;">
        <a class="navbar-brand" href="#"><img src="smk5.jpg" height="50px" width="50px"></a>
         <div class="container">
            <div class="text-justify text-sm-left"><a class="navbar-brand" href="#">Selamat datang Di SMK Negeri 5 Kota Bekasi<br></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                   
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Siswa</a>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" role="presentation" href="<?=base_url('warga/warga.php') ?>">Kelas</a>
                          <a class="dropdown-item" role="presentation" href="<?=base_url('penduduk/warga.php') ?>">Nama Siswa</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Pembayaran</a>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" role="presentation" href="<?=base_url('warga/warga.php') ?>">Pembayaran SPP</a>
                          <a class="dropdown-item" role="presentation" href="<?=base_url('penduduk/warga.php') ?>">Total SPP</a>
                          
                        </div>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Logout</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div>
                <h1 style="height: 54px;margin: 36px;width: 1005px;padding: -60px;">Edit Data Siswa</h1>
            </div>
<div class="box-header">
<div class="pull-right">
                    <a href="siswa.php" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i> Back
                    </a>
                    </div>
                    </div>
<div class="row">
  <div class="col-md-12" style="height: 504px;margin: 100px;padding: -10px;">
        <form action="update.php" method="post">
        <div class="form-group">
                <label for="nisn">Nisn</label>
                <input type="text" name="nisn" value="<?=$data['nisn'] ?>" id="nisn" class="form-control" required autofocus>
            </div>
            <div class="form-group">
                <label for="nis">Nis</label>
                <input type="text" name="nis" value="<?=$data['nis'] ?>" id="nis" class="form-control" required>
            </div>
             <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="<?=$data['nama'] ?>" id="nama" class="form-control" required>
            </div>
             <div class="form-group">
                <label for="id_kelas">id_kelas</label>
                <input type="text" name="id_kelas" value="<?=$data['id_kelas'] ?>" id="id_kelas" class="form-control" required>
            </div>
             <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input type="text" name="no_telp" value="<?=$data['no_telp'] ?>" id="no_telp" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="id_spp">id_Spp</label>
                <input type="text" name="id_spp" value="<?=$data['id_spp'] ?>" id="id_spp" class="form-control" required>
            </div>
            
             <label for="jns_cek">Pengecekan</label>
                <select name="jns_cek" id="jns_cek" class="form-control" required>
                    <option value="">- Pilih -</option>
                    <option value="Sudah" <?php if($data['jns_cek'] == 'Sudah') { echo 'selected'; } ?>>Sudah</option>
                    <option value="Belum" <?php if($data['jns_cek'] == 'Belum') { echo 'selected'; } ?>>Belum</option>
                    
                </select>
                <br>
           
            <div class="form-group pull-right">
                <input type="submit" name="submit" value="Submit" class="btn btn-success">
            </div>
        </form>
    <?php
    }
    ?>
        </div>
    </div>
    <script src="<?=base_url('assetss/assets/js/jquery.min.js'); ?>"></script>
    <script src="<?=base_url('assetss/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?=base_url('assetss/assets/js/Fixed-navbar-starting-with-transparency.js'); ?>"></script>
</body>

</html>