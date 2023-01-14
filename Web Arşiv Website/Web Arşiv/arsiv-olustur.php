<?php 


include "baglanti.php";
session_start();
$userid=$_SESSION["userid"];

$uzanti=$_FILES["arsivfoto"]["type"];
if($uzanti == "image/jpeg" || $uzanti == "image/png"){//jpg ile jpeg aynı algılıyor

 if($_FILES["arsivfoto"]["size"]>200000){
  echo "<script>alert('Fotoğraf Boyutu 200kb den yüksek olamaz.')</script>";
  header("Refresh: 0; url=kullanici.php");
 }
 else {


 $arsivturu=$_POST["arsivturu"];
 if($arsivturu=="Kullanıcı Bazlı Arşiv")
 {
     $username=$_SESSION["username"];
 }
 else{
  $username="Anonim";
 }

  $arsivadi=$_POST["arsivadi"];
  $arsivkategori=$_POST["arsivkategori"];
  $arsivsayisi=0;
  $sql2="SELECT kategoriadi,arsivsayisi FROM categories";
  $result2 = mysqli_query($baglan, $sql2);
    while($row2 = mysqli_fetch_assoc($result2)) {
        if($arsivkategori == $row2["kategoriadi"])
        {
           $arsivsayisi=$row2["arsivsayisi"];
           break;
        }
    }
  $arsivsayisi+=1;
  $sql3="UPDATE categories SET arsivsayisi='$arsivsayisi' WHERE kategoriadi='$arsivkategori'";
  $baglan->query($sql3);




  $arsivfoto=$_FILES["arsivfoto"]["name"];
  $arsivaciklama=$_POST["arsivaciklama"];
  $arsivicerik=$_POST["arsivicerik"]; 

  $sql = "SELECT arsivfoto FROM archives";
  $result = mysqli_query($baglan, $sql);
  $flag=false;
    while($row = mysqli_fetch_assoc($result)) {
     if($row["arsivfoto"]==$arsivfoto)
     {
         echo "<script>alert('Bu Dosya adı kullanılmakta veri kaybı olmaması amacı ile lütfen dosya adınızı değiştirerek deneyin')</script>";  
         header("Refresh: 0; url=kullanici.php");
         $flag=true;
         break;
     }   
    
    } 
    if($flag != true)  
    {
      if(is_uploaded_file($_FILES["arsivfoto"]["tmp_name"]))//dosya geldimi kontrolü
   {
        move_uploaded_file($_FILES["arsivfoto"]["tmp_name"],"images/".$arsivfoto);//dosyayı klasöre ekleme fonku
   }
   else {
         echo "<script>alert('Fotoğraf Yüklenemedi.')</script>";
         header("Refresh: 0; url=kullanici.php");
   } 


  $sql = "INSERT INTO archives (username, userid,arsivadi,arsivturu,arsivkategori,arsivfoto,arsivaciklama,arsivicerik)
  VALUES ('$username', '$userid', '$arsivadi','$arsivturu','$arsivkategori','$arsivfoto','$arsivaciklama','$arsivicerik')";
  if ($baglan->query($sql)===TRUE) { 
    echo "<script>alert('Arşiv Başarıyla Oluşturuldu')</script>";
  } else {
    echo "hata: " . $sql2 . "<br>" . $baglan->error;
  }
  header("Refresh: 0; url=kullanici.php");
  $baglan->close();


    }    
 }
}
else
{
     echo "<script>alert('Arşiv Fotoğrafı olarak sadece jpg, jpeg, png uzantılı fotoğraf yüklenebilir.')</script>";
     header("Refresh: 0; url=kullanici.php");          
}



?>