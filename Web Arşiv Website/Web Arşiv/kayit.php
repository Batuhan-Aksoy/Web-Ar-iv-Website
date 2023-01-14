<?php 
include "baglanti.php";

$username=$_POST["username"];
$password=$_POST["pass"];
$email=$_POST["email"];
$tel=$_POST["tel"];


$sql1 = "SELECT username FROM users";
$result = mysqli_query($baglan, $sql1);
$flag=false;
if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
     if($row["username"]==$username)
     {
         echo "<script>alert('Bu kullanıcı Adı zaten mevcut farklı bir kullanıcı adı deneyiniz.')</script>";  
         header("Refresh: 0; url=kgiris.html");
         $flag=true;
         break;
     }   
    
    } 
  } 
    if($flag!=true){

      $password=base64_encode($password);

$sql2 = "INSERT INTO users (username, userps, useremail,usertel)
VALUES ('$username', '$password', '$email','$tel')";
if ($baglan->query($sql2)===TRUE) { //$baglan->query($sql) sql kodunu çalıştırır.
    echo "<script>alert('Kayıt Başarılı')</script>";
  } else {
    echo "hata: " . $sql2 . "<br>" . $baglan->error;
  }
  header("Refresh: 0; url=kgiris.html");

    }
  $baglan->close();

?>