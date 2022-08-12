<?php

include "functions.php";
?>

<!DOCTYPE html>
<html style="margin: -32px;height: 263px;width: -273px;padding: -300px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Suhu</title>
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
                   
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Siswa </a>
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
                <h1 style="height: 54px;margin: 36px;width: 1005px;padding: -60px;">Tambah Data Pembayaran</h1>
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
        <form action="" method="post">
        <div class="form-group">
                <label for="id_pembayaran">Id Pembayaran</label>
                <input type="text" name="id_pembayaran" id="id_pembayaran" class="form-control" required autofocus>
            </div>
            <div class="form-group">
                <label for="id_petugas">Id Petugas</label>
                <input type="text" name="id_petugas" id="id_petugas" class="form-control" required>
            </div>
             <div class="form-group">
                <label for="nisn">Nisn</label>
                <input type="text" name="nisn" id="nisn" class="form-control" required>
            </div>
             <div class="form-group">
                <label for="tgl_pembayaran">Tanggal Pembayaran</label>
                <input type="date" name="tgl_pembayaran" id="tgl_pembayaran" class="form-control" required>
            </div>
             <div class="form-group">
                <label for="bulan_dibayar">Bulan dibayar</label>
                <input type="text" name="bulan_dibayar" id="bulan_dibayar" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tahun_dibayar">Tahun dibayar</label>
                <input type="text" name="tahun_dibayar" id="tahun_dibayar" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="id_spp">Id SPP</label>
                <input type="text" name="id_spp" id="id_spp" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jumlah_bayar">Jumlah pembayaran</label>
                <input type="text" name="jumlah_bayar" id="jumlah_bayar" class="form-control" required>
            </div>

             
                <br>
           
            <div class="form-group pull-right">
                <input type="submit" name="submit" value="Submit" class="btn btn-success">
            </div>
        </form>
        <?php
        if(isset($_POST['submit'])){
            $id_pembayaran        = $_POST['id_pembayaran'];
            $id_petugas          = $_POST['id_petugas'];
            $nisn         = $_POST['nisn'];
            $tgl_pembayaran  = $_POST['tgl_pembayaran'];
            $bulan_dibayar     = $_POST['bulan_dibayar'];
            $tahun_dibayar  = $_POST['tahun_dibayar'];
            $id_spp       = $_POST['id_spp'];
            $jumlah_bayar      = $_POST['jumlah_bayar'];
        

            $cek = mysqli_query($con, "SELECT * FROM pembayaran WHERE id_pembayaran='$id_pembayaran'") or die(mysqli_error($con));
            
            if(mysqli_num_rows($cek) == 0){
                $sql = mysqli_query($con, "INSERT INTO pembayaran(id_pembayaran, id_petugas, nisn, tgl_pembayaran, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar) VALUES('$id_pembayaran', '$id_petugas', '$nisn', '$tgl_pembayaran', '$bulan_dibayar', '$tahun_dibayar', '$id_spp', '$jumlah_bayar')") or die(mysqli_error($con));
                
                if($sql){
                    echo '<script>alert("Berhasil menambahkan data."); document.location="bayar.php";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }
            }else{
                echo '<div class="alert alert-warning">Gagal, id pembayaran sudah terdaftar.</div>';
            }
        }
?>
        </div>
    </div>
    <script src="<?=base_url('assetss/assets/js/jquery.min.js'); ?>"></script>
    <script src="<?=base_url('assetss/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?=base_url('assetss/assets/js/Fixed-navbar-starting-with-transparency.js'); ?>"></script>
</body>

</html>