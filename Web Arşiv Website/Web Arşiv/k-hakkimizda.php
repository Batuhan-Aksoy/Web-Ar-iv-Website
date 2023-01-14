<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımızda</title>
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
    <section class="kcontainer8">
         <h2>Hakkımızda</h2>
         <hr>
         <ul>
             <li>
                 Web Arşiv dinamik ve kullanıcı bazlı bir sitedir.
             </li>
             <li>
                 Kullanıcıların kişisel arşiv oluşturabileceği ve verilerini saklayarak kullanabileceği veya Anonim yada Kullanıcı Bazlı
                 Arşiv oluşturarak herkese açık bilgi paylaşabileceği bir web sitedir.
             </li>
             <li>
                 Kaar amacı gütmeyen insanlara ücretsiz hizmet veren bir sitedir.
             </li>
             <li>
                 İnsanların arşivlerinin güvenliği bizim için çok önemlidir. Sitemize yüklenen Kişisel arşivlere arşiv sahibi harici
                 başta biz Web Arşiv olmak üzere hiçbir kullanıcı, kurum, kuruluş tarafından erişim sağlanamaz.
             </li>
         </ul>
         <br>
         
         <h3>Konum</h3>
         <hr><br>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2985.8835111090843!2d32.290411815730494!3d41.5501193938533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409b7ab4a40a9d37%3A0x503bc50f823c4b15!2zQmFydMSxbiDDnG5pdmVyc2l0ZXNpIEt1dGx1YmV5IFlhesSxY8SxbGFyIEthbXDDvHPDvA!5e0!3m2!1str!2str!4v1623346864810!5m2!1str!2str" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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