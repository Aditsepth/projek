<?php
      include "functions.php";
            $id_kelas         = $_POST['id_kelas'];
            $nama_kelas      = $_POST['nama_kelas'];
            $kompetensi_keahlian       = $_POST['kompetensi_keahlian'];
          


      
      // $id = @$_GET['id'];
      $sql_update = mysqli_query($con, "UPDATE kelas SET id_kelas= '$id_kelas', nama_kelas='$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian' WHERE id_kelas='$id_kelas'");

      if($sql_update) {
      echo '<script>alert("Berhasil Merubah Data."); document.location="kelas.php";</script>';
      } else {
      echo '<div class="alert alert-warning">Gagal melakukan update data.</div>';
      }
?>