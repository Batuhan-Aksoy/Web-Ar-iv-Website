<?php 
include 'baglanti.php';

$username=$_POST["username"];
$password=$_POST["pass"];
$flag =false;
$sql = "SELECT userid,username,userps FROM users";
$result = $baglan->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       $pas=base64_decode($row["userps"]);
        if($username==$row["username"] && $password == $pas)
        {
            $flag=true;
            session_start();
            $_SESSION["username"]=$row["username"];
            $_SESSION["userid"]=$row["userid"];
            echo "<script>alert('Giriş Başarılı Hoşgeldiniz ".$row["username"]."')</script>";
            header("Refresh:0; url=kullanici.php");
            break;
        }

    }
    if($flag !=true)
    {
        echo "<script>alert('Kullanıcı Adı veya Şifre yanlış Lütfen tekrar deneyiniz.')</script>";
        header("Refresh:0; url=kgiris.html");
    }
  } else {
    echo "Kayıt Yok";
  }
  $baglan->close();


?>