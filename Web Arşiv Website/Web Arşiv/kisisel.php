<?php 
include "baglanti.php";
session_start();
$userid=$_SESSION["userid"];
$karsivtarih=date("y,m,d");
$karsivadi=$_FILES["kdosya"]["name"];

$sql = "SELECT karsivadi FROM karchives";
$result = mysqli_query($baglan, $sql);
$flag=false;
if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
     if($row["karsivadi"]==$karsivadi)
     {
         echo "<script>alert('Bu Dosya adı kullanılmakta veri kaybı olmaması amacı ile lütfen dosya adınızı değiştirin')</script>";  
         header("Refresh: 0; url=kullanici.php");
         $flag=true;
         break;
     }   
    
    } 
  }
  if($flag!=true)
  {

  $sql2 = "INSERT INTO karchives (userid,karsivadi,karsivtarih)
VALUES ('$userid', '$karsivadi', '$karsivtarih')";
if ($baglan->query($sql2)===TRUE) { 

    if(is_uploaded_file($_FILES["kdosya"]["tmp_name"]))//dosya geldimi kontrolü
   {
        move_uploaded_file($_FILES["kdosya"]["tmp_name"],"kisisel/".$karsivadi);//dosyayı klasöre ekleme fonku
   }
   else {
         echo "<script>alert('Dosya Yüklenirken hata oluştu.')</script>";
         header("Refresh: 0; url=kullanici.php");
   }

    echo "<script>alert('Yükleme Başarılı')</script>";
  } else {
    echo "hata: " . $sql2 . "<br>" . $baglan->error;
  } 

  header("Refresh: 0; url=kullanici.php");
}
  $baglan->close();


?>