<?php 
include "baglanti.php";
session_start();
$userid=$_SESSION["userid"];
$username=$_POST["username"];
$useremail=$_POST["email"];
$iletisimturu=$_POST["tur"];
$iletisimmesaj=$_POST["mesaj"];

$sql = "INSERT INTO contact (userid, username, useremail,iletisimturu,iletisimmesaj)
VALUES ('$userid', '$username', '$useremail','$iletisimturu','$iletisimmesaj')";
if ($baglan->query($sql)===TRUE) { //$baglan->query($sql) sql kodunu çalıştırır.
    echo "<script>alert('İletişim Talebiniz başarıyla alındı.')</script>";
    header("Refresh: 0; url=kullanici.php");
  } else {
    echo "hata: " . $sql . "<br>" . $baglan->error;
  }
  $baglan->close();
  
?>