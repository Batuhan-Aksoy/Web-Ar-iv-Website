<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonim Arşivler</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="global.css" rel="stylesheet">
    <link href="KMain.css" rel="stylesheet">
</head>
<body>
<?php 
      session_start();
      if($_SESSION["username"]==NULL)
      {
         echo "<script>alert('Lütfen Giriş Yapın')</script>";
         header("Refresh: 0; url=kgiris.html");
      }
      $username=$_SESSION["username"];
    ?>
<header>
        <div class="top-t">
            <ul>
                <li>Bizi Takip Et</li>
                <li title="İnstagram"><a href="#"><i class="fab fa-instagram"></i></a></i></li>
                <li title="Whatsapp"><a href="#"><i class="fab fa-whatsapp"></i></a></i></li>
                <li title="Twitter"><a href="#"><i class="fab fa-twitter"></i></a></i></li>
                <li title="Facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></i></li>
            </ul>
            <div class="top-t-right" ><?php echo $username; ?> </div>
           
        </div>
        <div class="top">
            <div class="logo">
                <a href="kanasayfa.php"><img src="images/logo-4.jpg" title="logo" alt="logo" width="100px" height="100px" style="border-radius: 100%;"></a>
            </div>
            <div class="header-right">
                <ul>
                    <li><a href="kanasayfa.php">Anasayfa</a></li>
                    <li><a href="kullanici.php">Sayfam</a></li>
                    <li onmousemove="get();" onmouseout="unget();">
                     <ul id="get">
                         <li><a href="k-anonim-arsivler.php">Anonim Arşivler</a></li>
                         <li><a href="k-kullanici-arsivler.php">Kullanıcı Bazlı Arşivler</a></li>
                     </ul><a href="k-arsiv.php">Arşivler</a>
                    </li> 
                    <li><a href="k-hakkimizda.php">Hakkımızda</a></li>
                    <li><a href="k-iletisim.php">İletişim</a></li>
                    
                </ul>
            </div>
        </div>
    </header>
    <section class="kcontainer3">
        <h3 align="center">Anonim Arşivler</h2>
     <?php 
     include "baglanti.php";
          $sql = "SELECT * FROM archives";
          $result = $baglan->query($sql);
          echo "<div class='items'>";
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) { 
                 
                if($row["arsivturu"]=="Anonim Arşiv")
                {

               
                echo "
                <div class='item'>
                     <p><strong>Kullanıcı Adı: </strong>".$row["username"]."</p>
                     <p><strong>Arşiv Türü: </strong>".$row["arsivturu"]."</p>
                     <p><strong>Kategori: </strong>".$row["arsivkategori"]."</p>
                     <p><strong>Arşiv Adı: </strong>".$row["arsivadi"]."</p>
                     <img src='images/".$row["arsivfoto"]."' width='200' height='200'>
                     <div class='item-content'><strong>Açıklama: </strong>
                     ".$row["arsivaciklama"]."  
                  </div>
                     <p><strong>Beğeni Sayısı: </strong>".$row["arsivlike"]." Beğeni &nbsp; <i class='fas fa-thumbs-up'></i> </p>
                         <form action='like.php' method='GET'>
                         <input type='hidden' value='".$row["arsivid"]."' name='arsivid'>
                         <input type='hidden' value='".$row["arsivlike"]."' name='like'>
                         <input class='btn' type='submit' value='Beğen' name='anonimlike'>
                         </form>&nbsp;
                         <form action='arsiv-icerik.php' method='GET'>
                         <input type='hidden' value='".$row["arsivid"]."' name='arsivid'>
                         <input class='btn' type='submit' value='Yorumlar' name='yorum'> &nbsp;
                         <input class='btn' type='submit' value='Göz At'>
                         </form>
                </div>"; 
                }
              }
              echo "</div>";
            }else {
                echo "Arşiv yok";
            }
            $baglan->close();
     ?>
    </section>
    <footer>
        <p>Web Arşiv © - Tüm Hakları Saklıdır. Gizlilik, Kullanım ve Telif Hakları bildiriminde belirtilen kurallar çerçevesinde hizmet sunulmaktadır.</p>
        <p>Şikayet Etmek veya Bize ulaşmak için <a href="k-iletisim.php">tıklayınız</a></p>
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