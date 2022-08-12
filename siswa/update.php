<?php
      include "functions.php";
            $nisn          = $_POST['nisn'];
            $nis           = $_POST['nis'];
            $nama          = $_POST['nama'];
            $id_kelas  = $_POST['id_kelas'];
            $no_telp     = $_POST['no_telp'];
            $id_spp = $_POST['id_spp'];
            $jns_cek       = $_POST['jns_cek'];


      
      // $id = @$_GET['id'];
      $sql_update = mysqli_query($con, "UPDATE siswa SET nisn= '$nisn', nis='$nis', nama='$nama', id_kelas='$id_kelas', no_telp='$no_telp', jns_cek='$jns_cek' WHERE nisn='$nisn'");

      if($sql_update) {
      echo '<script>alert("Berhasil Merubah Data."); document.location="siswa.php";</script>';
      } else {
      echo '<div class="alert alert-warning">Gagal melakukan update data.</div>';
      }
?>