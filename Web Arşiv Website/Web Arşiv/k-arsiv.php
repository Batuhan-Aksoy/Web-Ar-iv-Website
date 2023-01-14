<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arşivler</title>
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

    <section class="kcontainer10">
       <h2>Arşivler</h2>
       <hr>
       <br>
       <h4>Web Arşiv Nasıl Kullanılır ?</h4>
       <p>
        Hesap oluşturup kullanıcı girişi yaptığınızda istediğiniz dosyalarınızı yükleyerek saklayabileceğiniz ve istediğiniz gibi düzenleyebileceğiniz
        bir web arayüzümüz bulunmaktadır. Özgürce dosya depolamak için kişisel arşiv oluşturabilir veya insanlarla bilgi paylaşmak için herkese açık arşivler
        oluşturabilirsiniz. Arşiv oluşturmak istemiyorsanız özgürce arşivleri gezebilir isterseniz beğenebilir isterseniz yorum yapabilir yada şikayet 
        edebilirsiniz.
       </p>
       <br>
       <hr>
       <br>
       <h4>Arşiv oluşturma</h4>
       <p>
           Arşiv oluşturmak istiyorsanız önünüzde iki seçenek vardır:
           <ul>
               <li><strong>1. Kişisel Arşiv</strong></li>
               <li><strong>2. Anonim Arşiv</strong></li>
               <li><strong>3. Kullanıcı Bazlı Arşiv</strong></li>
           </ul>
           Arşiv oluşturmak arşivleri beğenmek, yorum yapmak yada şikayet etmek için sitemizin bir kullanıcısı olmanız gerekir. Ücretsiz bir
           şekilde kayıt olabilir ve sitemizi özgürce kullanabilirsiniz. Kullanıcı Girişi yaptıktan sonra size ait kişisel arşiv yada herkese açık arşiv oluşturabilirsiniz.
           Herkese açık arşiv oluşturduğunuz arşivleri anonim veya size ait olduğunu belirleyebilirsiniz
           
       </p>
       <br>
       <hr>
       <br>
       <h4>Kişisel Arşivler</h4>
       <p>Kişisel Arşivler kullanıcıların kendilerine özel olan ve sadece kullanıcıların erişebildiği bir arşiv türüdür.
           Sitemizin kullanıcı arayüzünde istediğiniz gibi kişisel arşiv oluşturabilir ve düzenleyebilirsiniz.
       </p>
       <br>
       <hr>
       <br>
       <h4>Anonim Arşivler</h4>
       <p>
           Anonim Arşivler kullanıcıların kendilerini gizli tuttuğu ancak herkese açık bir arşiv türüdür. Anonim şekilde arşiv oluşturup
           kendizini gizli tutarak özgür bir arşiv insanlara sunabilirsiniz.<br>
           Oluşturulan popüler Anonim Arşivler için <a href="k-anonim-arsivler.php">tıklayınız.</a>
       </p>
       <br>
       <hr>
       <br>
       <h4>Kullanıcı Bazlı Arşivler</h4>
       <p>Kullanıcı Bazlı Arşivler kullanıcıların kendilerini açık tutduğu ve herkese açık olan arşivlerdir. Kullanıcı bazlı arşiv oluşturarak
           arşivin oluşturucusunun kim olduğunu kim olduğunu gösterebilir ve arşivinizi insanların görmesini sağlayabilirsiniz.<br>
           Oluşturulan popüler Kullanıcı Bazlı Arşivler için <a href="k-kullanici-arsivler.php">tıklayınız</a>
       </p>
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