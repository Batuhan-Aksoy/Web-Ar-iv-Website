<?php 
$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="webarsiv";

$baglan=new mysqli($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);
if($baglan->connect_error)
{
    die("bağlantı başarısız".$baglan->connect_error);
}  
?>