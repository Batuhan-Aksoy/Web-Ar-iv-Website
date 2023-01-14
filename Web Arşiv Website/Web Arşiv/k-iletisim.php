<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
    <!--CSS dosyaları-->
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

    <section class="kcontainer9">
        <form action="iletisim.php" method="POST">
        <h2>İletişim için lütfen aşağıdaki formu doldurunuz.</h2><br>
        <label><strong>Kullanıcı Adı:</strong></label><br>
        <input type="text" name="username" value="<?php echo $username ?>" minlength="8" maxlength="15" class="input" required>
        <p>Lütfen kullanıcı adınızı giriniz.</p><br>

            <label><strong>Email Adres:</strong></label><br>
             <input type="email" name="email" minlength="8" maxlength="15" class="input" required>
             <p>Lütfen size geri dönüş sağlayacağımız email adresinizi giriniz</p><br>
             <label><strong>İletişim Türü:</strong></label><br>
             <select class="input" name="tur" required>
                 <option value="" selected disabled>Seçiniz</option>
                 <option value="Bilgi Almak">Bilgi Almak</option>
                 <option value="Şikayet Etmek">Şikayet Etmek</option>
                 <option value="Diğer">Diğer</option>
             </select>
             <p>Lütfen İletişim Türü seçiniz. Arşiv Şikayet Etmek istiyorsanız şikayet Etme türünü seçerek Arşiv içeriği bölümünde url kısmında yazan arşiv id ye göre yada arşiv adı ile sikayet edebilirsiniz</p><br>
             <label><strong>Mesaj:</strong></label><br>
             <textarea class="input" rows="10" minlength="10" name="mesaj" required></textarea>
             <p>Lütfen Mesajınızı yazınız.</p><br>
             <input type="submit" value="Gönder" class="btn2">
             <input type="reset" value="Temizle" class="btn2">
            </form>
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