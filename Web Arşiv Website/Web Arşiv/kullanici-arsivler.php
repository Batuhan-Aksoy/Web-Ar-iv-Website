<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Bazlı Arşivler</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="global.css" rel="stylesheet" >
    <link href="Main.css" rel="stylesheet">
</head>
<body>
<header>
        <div class="top-t">
            <ul>
                <li>Bizi Takip Et</li>
                <li title="İnstagram"><a href="#"><i class="fab fa-instagram"></i></a></i></li>
                <li title="Whatsapp"><a href="#"><i class="fab fa-whatsapp"></i></a></i></li>
                <li title="Twitter"><a href="#"><i class="fab fa-twitter"></i></a></i></li>
                <li title="Facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></i></li>
            </ul>     
        </div>
        <div class="top">
            <div class="logo">
                <a href="anasayfa.php"><img src="images/logo-4.jpg" title="logo" alt="logo" width="100px" height="100px" style="border-radius: 100%;"></a>
            </div>
            <div class="header-right">
                <ul>
                    <li><a href="anasayfa.php">Anasayfa</a></li>
                    <li onmousemove="get();" onmouseout="unget();">
                     <ul id="get">
                         <li><a href="anonim-arsivler.php">Anonim Arşivler</a></li>
                         <li><a href="kullanici-arsivler.php">Kullanıcı Bazlı Arşivler</a></li>
                     </ul><a href="arsiv.html">Arşivler</a>
                    </li>
                    <li><a href="kgiris.html">Kullanıcı Girişi</a></li>
                    <li><a href="hakkimizda.html">Hakkımızda</a></li>
                    <li><a href="iletisim.html">İletişim</a></li>
                    
                </ul>
            </div>
        </div>
    </header>
<section class="container7">
<h2 align="center">Kullanıcı Bazlı Arşivler</h2>
<br>
<div class="items">
<?php 
     include "baglanti.php";
     $sql = "SELECT * FROM archives";
     $result = $baglan->query($sql);
     if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
         if($row["arsivturu"]=="Kullanıcı Bazlı Arşiv")
         {


         
     echo "<div class='item' style='margin-bottom:1rem;'>
      <p><strong>Kullanıcı Adı: </strong>".$row["username"]."</p>
      <p><strong>Kategori: </strong>".$row["arsivkategori"]."</p>
      <p><strong>Arşiv Adı: </strong>".$row["arsivadi"]."</p>
      <img src='images/".$row["arsivfoto"]."' width='200' height='200'>
      <div class='item-content'><strong>Açıklama: </strong>
      ".$row["arsivaciklama"]."  
       </div>
      ".$row["arsivlike"]." Beğeni 
       <i class='fas fa-thumbs-up'></i> &nbsp;
          <input class='btn' type='submit' onclick='kontrol();' value='Yorum Yap'> &nbsp;
          <input class='btn' type='submit' onclick='kontrol();' value='Göz At'>
       </div>";
      }
     }
  }else {
      echo "Arşiv yok";
  }
  $baglan->close();

     ?>
    </section>
    <footer>
        <p>Web Arşiv © - Tüm Hakları Saklıdır. Gizlilik, Kullanım ve Telif Hakları bildiriminde belirtilen kurallar çerçevesinde hizmet sunulmaktadır.</p>
        <p>Şikayet Etmek veya Bize ulaşmak için <a href="iletisim.html">tıklayınız</a></p>
        <div class="footer-bottom">
        <ul>
            <li>Bizi Takip Et</li>
            <li title="İnstagram"><a href="#"><i class="fab fa-instagram"></i></a></i></li>
            <li title="Whatsapp"><a href="#"><i class="fab fa-whatsapp"></i></a></i></li>
            <li title="Twitter"><a href="#"><i class="fab fa-twitter"></i></a></i></li>
            <li title="Facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></i></li>
        </ul></div>
     </footer>
     <script src="Main.js"></script>
</body>
</html>