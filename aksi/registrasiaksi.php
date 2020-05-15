<?php 
    include ('../view/koneksi.php');
    $cek_user=mysql_num_rows(mysql_query("SELECT * FROM registrasi WHERE id='$_POST[id]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("Username Sudah Ada Yang Menggunakan");
              window.location="dashboard.html";
              </script>';
              exit();
    }
    else {
        $password    =md5('$_POST[password]');
        mysql_query("INSERT INTO registrasi (id, nama, username, password, email, no_hp, )
        VALUES ('$_POST[id]', '$_POST[nama]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$no_hp')");
        
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              location="dashboard.html";
              </script>';
              exit();
    }
?>