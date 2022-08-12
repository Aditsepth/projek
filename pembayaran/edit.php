<?php

include "functions.php";


$id = @$_GET['id'];
$con = mysqli_connect("localhost", "root", "", "spp") or die(mysqli_error());


//query data penduduk

$result = mysqli_query($con, "SELECT * FROM pembayaran WHERE id_pembayaran = '$id'"); 

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
                <h1 style="height: 54px;margin: 36px;width: 1005px;padding: -60px;">Edit Data Pembayaran</h1>
            </div>
<div class="box-header">
<div class="pull-right">
                    <a href="bayar.php" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i> Back
                    </a>
                    </div>
                    </div>
<div class="row">
  <div class="col-md-12" style="height: 504px;margin: 100px;padding: -10px;">
        <form action="update.php" method="post">
        <div class="form-group">
                <label for="id_pembayaran">Id Pembayaran</label>
                <input type="text" name="id_pembayaran" value="<?=$data['id_pembayaran'] ?>" id="id_pembayaran" class="form-control" required autofocus>
            </div>
            <div class="form-group">
                <label for="id_petugas">Id Petugas</label>
                <input type="text" name="id_petugas" value="<?=$data['id_petugas'] ?>" id="id_petugas" class="form-control" required>
            </div>
             <div class="form-group">
                <label for="nisn">Nisn</label>
                <input type="text" name="nisn" value="<?=$data['nisn'] ?>" id="nisn" class="form-control" required>
            </div>
             <div class="form-group">
                <label for="tgl_pembarayan">Tanggal Pembayaran</label>
                <input type="date" name="tgl_pembarayan" value="<?=$data['tgl_pembarayan'] ?>" id="tgl_pembarayan" class="form-control" required>
            </div>
             <div class="form-group">
                <label for="bulan_dibayar">Bulan dibayar</label>
                <input type="text" name="bulan_dibayar" value="<?=$data['bulan_dibayar'] ?>" id="bulan_dibayar" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tahun_dibayar">Tahun dibayar</label>
                <input type="text" name="tahun_dibayar" value="<?=$data['tahun_dibayar'] ?>" id="tahun_dibayar" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="id_spp">Id Spp</label>
                <input type="text" name="id_spp" value="<?=$data['id_spp'] ?>" id="id_spp" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jumlah_bayar">Jumlah Bayar</label>
                <input type="text" name="jumlah_bayar" value="<?=$data['jumlah_bayar'] ?>" id="jumlah_bayar" class="form-control" required>
            </div>
            
             
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