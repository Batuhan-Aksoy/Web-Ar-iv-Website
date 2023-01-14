<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Sayfası</title>
    <!--CSS dosyaları-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="global.css" rel="stylesheet" >
    <link href="KMain.css" rel="stylesheet" >
</head>
<body>
    <?php 
      session_start();
      if($_SESSION["username"]==NULL && $_SESSION["userid"]==NULL)
      {
         echo "<script>alert('Lütfen Giriş Yapın')</script>";
         header("Refresh: 0; url=kgiris.html");
      }
      $username=$_SESSION["username"];
      $userid=$_SESSION["userid"];
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
            <div class="top-t-right" ><?php echo $username; ?> &nbsp;<i class="fas fa-caret-down" onmousemove="oturum();"></i>
            <div class="oturum" >
                <ul onmouseout="closeoturum();">
                    <a href="oturum.php"><li>Oturum Kapat</li></a>
                </ul>
            </div>
           </div>
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

    <section class="kcontainer">
     <div class="leftside">
        <ul>
            <li onclick="arsivlerim();">Arşivlerim</li>
            <li onclick="arsivolustur();">Arşiv Oluştur</li>
            <li onclick="kisiselarsiv();">Kişisel Arşivim</li>
        </ul>  
     </div>




     <div class="rightside">


       <h2 align="center" class="h2" style="margin-bottom:37rem;"><?php echo $username; ?> Web Arşive Hoşgeldiniz</h2>

     <div class="arsivlerim">
         <h3>Arşivleriniz</h3>
          <br>
         <?php 
           include "baglanti.php";
           $sql = "SELECT * FROM archives";
           $flag3=false;
           $result = $baglan->query($sql);
           echo "<div class='items'>";
           if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  if($userid == $row["userid"])
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
                         <form action='arsiv-duzenle.php' method='GET'>
                         <input type='hidden' value='".$row["arsivid"]."' name='arsivid'>
                         <input class='btn' type='submit' value='Düzenle'>
                         </form>&nbsp;
                         <form action='arsiv-icerik.php' method='GET'>
                         <input type='hidden' value='".$row["arsivid"]."' name='arsivid'>
                         <input class='btn' type='submit' value='Yorumlar' name='yorum'> &nbsp;
                         <input class='btn' type='submit' value='Göz At'>
                         </form>
                </div>";
                $flag3=true;
                
                 }
              }
              if($flag3!=true)
              {
                  echo "Arşiviniz Yoktur.";
              }
            }else {
                echo "Arşiviniz Bulunmamaktadır.";
              }
              echo "</div>";
              $baglan->close();
              
         ?>


     </div>

     <div class="arsivolustur">
           <h3>Arşiv Oluşturma:</h3><br>
         <form action="arsiv-olustur.php" method="POST" enctype="multipart/form-data">
          <label>Arşiv Türü:</label>
          <select name="arsivturu"  class="input" required>
              <option value="" selected disabled>Seçiniz</option>
              <option value="Anonim Arşiv">Anonim Arşiv</option>
              <option value="Kullanıcı Bazlı Arşiv">Kullanıcı Bazlı Arşiv</option>
          </select>
          <label>Arşiv Adı:</label>
          <input type="text" name="arsivadi" class="input"  minlength="2" maxlength="100" required>
        
          <label>Arşiv Kategorisi:</label>
          <?php 
          
          echo "<select name='arsivkategori'  class='input' required>
          <option value='' selected disabled>Seçiniz</option>";
           
          include 'baglanti.php';
          $sql = "SELECT kategoriadi FROM categories";
          $result = $baglan->query($sql);
          
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<option value='".$row["kategoriadi"]."'>".$row["kategoriadi"]."</option>";
            }
          } else {
            echo "Veri Yok";
          }
          $baglan->close();

          echo "</select>";
          
          ?><br><br>
          <label>Arşiv Fotoğrafı:</label><br>
          <input type="File" accept=".png, .jpg, .jpeg" name="arsivfoto" class="input" required><br>
 
          <label>Arşiv Açıklama:</label>
          <input type="text" name="arsivaciklama" class="input"  minlength="2" maxlength="200" required>

          <label>Arşiv İçeriği:</label>
          <textarea class="input" rows="10" minlength="10" name="arsivicerik" required></textarea>
          <input type="submit" value="Oluştur" class="btn2">
          <input type="reset" value="Temizle" class="btn2">
         </form>

     </div>

       <div class="kisiselarsiv">
           <form action="kisisel.php" method="POST" enctype="multipart/form-data">
                 <p>İstediğiniz Dosyalarınızı yükeleyerek kişisel arşivinizi oluşturabilirsiniz.</p>
                 <input type="File" value="Dosya Seç" class="input" name="kdosya">
                 <input type="submit" value="Yüklemeyi Tamamla" class="btn">   
           </form><br>
         <h2>Kişisel dosyalarınız:</h2>

         <div class="kisiseldosyalar">
             <?php 
           include "baglanti.php";
           $sql = "SELECT karsivid,userid,karsivadi,karsivtarih FROM karchives";
           $flag2=false;
           $result = mysqli_query($baglan, $sql);
           if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                     if($row["userid"]==$userid)
                     {
                        echo "<div class='dosya'>
                        <div style='text-align:center;'><image src='images/folder1.jpg' title='".$row["karsivadi"]."' alt='dosya'></div>
                        <p>Dosya Adı: ".$row["karsivadi"]."</p>
                        <p>Dosyayı Görmek için <a href='kisisel/".$row["karsivadi"]."' target='_blank'>tıklayınız</a></p>
                        <p>Dosyayı İndirmek için <a href='kisisel/".$row["karsivadi"]."' download>tıklayınız</a></p>
                        <p>Yükleme tarihi: ".$row["karsivtarih"]."</p>
                        <form action='ksil.php' method='GET' style='text-align:center;'>
                        <input type='hidden' value='".$row["karsivid"]."' name='karsivid'>
                        <input type='submit' value='Dosyayı Sil' class='kbtn btn'>
                        </form>
                        </div>";
                        $flag2=true;
                     }
            }
            if($flag2!= true)
            {
                echo "Kişisel Arşiviniz Yoktur.";
            }
        }else {
            echo "Kişisel Arşiv Yok";
        }
              $baglan->close();
             
             ?>
             

         </div>
       </div>
    </div>
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