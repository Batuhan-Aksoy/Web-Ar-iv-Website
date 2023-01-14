<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Anasayfa</title>
    <!--CSS dosyaları-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="global.css" rel="stylesheet" >
    <link href="Main.css" rel="stylesheet">
</head>
<body onload="kat();">
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
    <section class="container">
        <div class="icerik">
        <h2>Web Arşiv ile herşey daha kolay</h2>
        <p>
            Web Arşiv İle istediğiniz gibi kişisel arşiv oluşturabilir istediğiniz belge numara video fotoğraf vb.
            dosyalarınızı arşivleyebilirsiniz. Dilediğiniz gibi Anonim veya Kullanıcı Bazlı herkesin erişebileceği bir arşiv
            oluşturabilir insanların görmesini ve yararlanmasını sağlayabilirsiniz.
        </p>
        <br>
        <button class="btn" onclick="kontrol();">Arşiv Oluştur</button>
       </div>
        <img src="images/icerik.jpg" title="Archive" alt="Archive" style="width: 80%;">
    </section>

     <section class="container2">

          <h2 align="center">Popüler Kategoriler</h2>
          <div class="kategori" >
         
            <i class="fas fa-chevron-left" onclick="left();"></i>
           
            <?php   

                 
               include "baglanti.php"; 
               $k=0;              
               $sql2 = "SELECT * FROM categories";
               $result2 = $baglan->query($sql2);
               if ($result2->num_rows > 0) {
               while($row2 = $result2->fetch_assoc()) {  

                    if($k==8)
                    {
                        break;
                    }
                    echo "<div class='kategori-item'>
                    <img src='images/".$row2["kategorifoto"]."' alt='program' title='".$row2["kategoriadi"]."' width='200' height='200'>
                    <br>
                    <p style='margin-bottom: 10px;'><strong >".$row2["kategoriadi"]."</strong></p>
                    <p><i class='fas fa-archive'></i> &nbsp; <strong> ".$row2["arsivsayisi"]." Arşiv</strong></p>
                    </div>";
                    $k+=1;  
               
               }
            }else{
                echo "Kategori Yok";
            }
            $baglan->close();
            ?>
           <i class="fas fa-chevron-right" onclick="right();"></i>
          </div>
         
     </section>

     <section class="container3">
        <h2 align="center">Popüler Arşivler</h2>
        <br>
        <div class="items">
       <?php 
                include "baglanti.php";
                $z=0;
                $sql3 = "SELECT * FROM archives";
                $result3 = $baglan->query($sql3);
                if ($result3->num_rows > 0) {  
                while($row3 = $result3->fetch_assoc()) { 

               

                     if($z==6)
                     {
                         break;
                    }
                    $z+=1;
                 echo "<div class='item' style='margin-bottom:1rem;'>
                 <p><strong>Kullanıcı Adı: </strong>".$row3["username"]."</p>
                 <p><strong>Kategori: </strong>".$row3["arsivkategori"]."</p>
                 <p><strong>Arşiv Adı: </strong>".$row3["arsivadi"]."</p>
                 <img src='images/".$row3["arsivfoto"]."' width='200' height='200'>
                 <div class='item-content'><strong>Açıklama: </strong>
                 ".$row3["arsivaciklama"]."  
                 </div>
                 ".$row3["arsivlike"]." Beğeni 
                 <i class='fas fa-thumbs-up'></i> &nbsp;
                    <input class='btn' type='submit' onclick='kontrol();' value='Yorum Yap'> &nbsp;
                    <input class='btn' type='submit' onclick='kontrol();' value='Göz At'>
                 </div>";
              }    
            
            }else {
                echo "Arşiv yok";
            }
            $baglan->close();     
               
      ?>
         
        </div>
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