<?php

include "functions.php";

?>

<!DOCTYPE html>
<html style="margin: -32px;height: 1063px;width: 723px;padding: 2px;">

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
    
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
</head>

<body style="margin: 123px;padding: 15px;height: 675px;width: 670px;">
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-transparency" style="background-color: #f3fbff;height: 13px;">
        <a class="navbar-brand" href="#"><img src="smk5.jpg" height="50px" width="50px"></a>
        <div class="container">
            <div class="text-justify text-sm-left"><a class="navbar-brand" href="#">Selamat datang Di SMK Negeri 5 Kota Bekasi<br></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                   
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Siswa</a>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" role="presentation" href="<?=base_url('kelas/kelas.php') ?>">Nama Kelas</a>
                          <a class="dropdown-item" role="presentation" href="<?=base_url('siswa/siswa.php') ?>">Nama Siswa</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Pembayaran</a>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" role="presentation" href="<?=base_url('pembayaran/bayar.php') ?>">Pembayaran SPP</a>
                          <a class="dropdown-item" role="presentation" href="<?=base_url('spp/spp.php') ?>">Total SPP</a>
                          
                        </div>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?=base_url('logout.php') ?>">Logout</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <?php 
    session_start();
 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
    }
    ?>
    <div class="margin-bottom: 20px;">
   
    <div class="row">
        <div class="col-md-12" style="height: 364px;margin: -3px;padding: -8px;">
            <div>
                <h1 style="height: 54px;margin: 36px;width: 735px;padding: -40px;">Daftar Nama Kelas</h1>
                <h1>Halo ,<b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</h1>
            </div>
              </div>
              </div>
            <a class="btn btn-primary" href="add.php" type="button" style="width: 218px;height: 41px;margin: 161px;padding: 5px;margin-top: -220px;margin-right: 229px;margin-bottom: 202px;margin-left: 1434px;">Add Nama Siswa </a><label></label>
            <a class="btn btn-primary" href="export.php" target="_blank" type="button" style="width: 218px;height: 41px;margin: 161px;padding: 5px;margin-top: -320px;margin-right: 229px;margin-bottom: 202px;margin-left: 1184px;">Export History</a>
            <div class="table-responsive" style="width: 1750px;height: 900px;margin-top: -124px;margin-bottom: 252px;padding: -40px;">
              <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Kelas</th>
                            <th>Nama Kelas</th>
                            <th>Kompetensi_keahlian</th>
                          
                            <th><i class="fa fa-edit ml-3x"></i> </th>
                            <th style="height: 60px;width: 41px;"><i class="fa fa-trash ml-3x"></i> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                $no = 1;
                $sql_query = mysqli_query($con, "SELECT * FROM kelas") or die (mysqli_error($conn));
                while ($data = mysqli_fetch_array($sql_query )) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data['id_kelas']?></td>
                        <td><?=$data['nama_kelas']?></td>
                        <td><?=$data['kompetensi_keahlian']?></td>
                      
                        <br>
                        <td><a href="edit.php?id=<?=$data['id_kelas'];?>" style="color: rgb(57,20,204);">Edit</a></td>
                        <td><a href="hapus.php?id=<?=$data['id_kelas'];?>" onclick="return confirm('Yakin Hapus Data?')" style="color: rgb(187,40,40);">Hapus</a></td>

                <?php    
                }
            ?>
                    </tbody>

                </table>

                <br>


            </div>

        
        </div>
    </div>
    <script src="<?=base_url('assetss/assets/js/jquery.min.js'); ?>"></script>
    <script src="<?=base_url('assetss/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?=base_url('assetss/assets/js/Fixed-navbar-starting-with-transparency.js'); ?>"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js" ></script>

            <script>
    $(document).ready(function(){
    $('#table1').DataTable();
    });
    </script>
</body>

</html>