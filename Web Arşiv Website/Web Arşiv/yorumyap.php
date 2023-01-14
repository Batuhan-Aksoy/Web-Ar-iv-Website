<?php 
include 'baglanti.php';

session_start();
$arsivid = $_SESSION["arsivid"];
$yusername=$_POST["username"];
$yorum=$_POST["yorum"];


if(isset($_POST["yorumduzenle"]))
{
  $yorumid=$_POST["yorumid"];
  $sql="UPDATE comments SET username='$yusername',yorum='$yorum' WHERE yorumid=$yorumid ";
  if($baglan->query($sql)===TRUE)
   {
     echo "<script>alert('Düzenleme Başarılı')</script>";
     header("Refresh:0; url=arsiv-icerik.php");
   }
   else{
    echo "hata: " . $sql . "<br>" . $baglan->error;
   }

}
if(isset($_POST["yorumsil"]))
{
  $yorumid=$_POST["yorumid"];
  $sql ="DELETE FROM comments WHERE yorumid=$yorumid";
  if($baglan->query($sql)===TRUE)
  { 
    echo "<script>alert('Silme Başarılı')</script>";
    header("Refresh:0; url=arsiv-icerik.php");
  }
  else {
    echo "hata: " . $sql . "<br>" . $baglan->error;
  }
}

if(isset($_POST["yorumyap"]))
{
  
$userid=$_POST["userid"];
$sql = "INSERT INTO comments (username,userid,arsivid,yorum)
VALUES ('$yusername','$userid','$arsivid','$yorum')";
if ($baglan->query($sql)===TRUE) {
    echo "<script>alert('Yorum başarılı bir şekilde yapıldı.')</script>";
    header("Refresh: 0; url=arsiv-icerik.php");
  } else {
    echo "hata: " . $sql . "<br>" . $baglan->error;
  }
}
 $baglan->close();
?> 


?>