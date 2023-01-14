<?php
include "baglanti.php";
$arsivid=$_GET["arsivid"]; 
$like=$_GET["like"];
$like=$like+1;
$sql="UPDATE archives SET arsivlike='$like' WHERE arsivid=$arsivid ";
if(isset($_GET["kullanicilike"]))
{
    if($baglan->query($sql)===TRUE)
{
    header("Refresh:0; url=k-kullanici-arsivler.php");
}
else{
    echo "hata: " . $sql2 . "<br>" . $baglan->error;
}
}
if(isset($_GET["anonimlike"])){
    if($baglan->query($sql)===TRUE)
{
    header("Refresh:0; url=k-anonim-arsivler.php");
}
else{
    echo "hata: " . $sql2 . "<br>" . $baglan->error;
}
}


?>