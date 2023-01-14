<?php 
 session_start();
 session_destroy();
 echo "<script>alert('Oturum Başarıyla Sonlandırıldı')</script>";
 header("Refresh: 0; url=anasayfa.php");
?>
