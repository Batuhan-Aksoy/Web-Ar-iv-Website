<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arşiv İçeriği</title>
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
      $userid =$_SESSION["userid"];
      if($_GET)
      {
          $_SESSION["arsivid"]=$_GET["arsivid"];
      }
      $arsivid=$_SESSION["arsivid"];
      if(isset($_GET["yorum"]))
      {
        header("Refresh:0; url=arsiv-icerik.php#yorumlar");
      }
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

    <section class="kcontainer2">
        <?php 
         include 'baglanti.php';
         $sql = "SELECT * FROM archives";
         $result = $baglan->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($arsivid==$row["arsivid"])
            {
               echo " 
               <h3>Arşiv Bilgileri</h3><hr>
              <p><strong>Kullanıcı Adı: </strong>".$row["username"]."</p>
              <p><strong>Arşiv Adı: </strong>".$row["arsivadi"]."</p>
              <p><strong>Arşiv Türü: </strong>".$row["arsivturu"]."</p>
              <p><strong>Arsiv Kategorisi: </strong>".$row["arsivkategori"]."</p>
              <p><strong>Arsiv Açıklaması: </strong>".$row["arsivaciklama"]."</p>
              <p><strong>Yorumlara Gitmek için <a href='#yorumlar'>tıklayınız</a></strong></p>
              <br>
              <h3>Arşiv İçeriği:</h3>
              <hr>
              <p>".$row["arsivicerik"]."</p>
              
         ";
            }
         }
       } else {
        echo "Veri Yok";
      }
      $baglan->close();
        ?>
        <br>
        <h3 id="yorumlar">Yorumlar</h3><hr><br>
        <button class="btn" onclick="yorumac();">Yorum Yap</button> &nbsp;
        <div class="yorumyap">
            <form action="yorumyap.php" method="POST">
                <label>Kullanıcı Adı:</label>
                <select name="username" class="input" required>
                    <option value="" selected disabled>Seçiniz</option>
                    <option value="Anonim">Anonim</option>
                    <option value="<?php echo $username; ?>"><?php echo $username; ?></option>
                </select>
                <input type="hidden" value="<?php echo $userid; ?>" name="userid">
                <label>Yorumunuz</label>
                <textarea class="input" rows="5" name="yorum" required></textarea>
                <input type="submit" value="Yorum Yap" class="btn2" name="yorumyap">
                <input type="button" value="Kapat" class="btn2" onclick="yorumkapat();">
            </form>
        </div>
        
            <?php 

            include "baglanti.php";
             $sql = "SELECT * FROM comments";
             $i=0;
             $result = $baglan->query($sql);
             if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()) {
                     if($row["arsivid"] == $arsivid)
                     {
                        
                        if($row["userid"]==$userid)
                        {
                             echo 
                      "<div class='yorumlar'>
                      <p><strong>Kullanıcı Adı: ".$row["username"]."</strong></p>
                      <p><strong>Yorumu:</strong></p>
                      <p>".$row["yorum"]."</p>
                      <input type='submit' value='Düzenle' onclick='yorumduzenle(".$i.");' style='margin-top:0.5rem;' class='btn'>
                      </div>";
                        
                      echo "
                      <div class='yorumyap2' style='display: none;'>
                      <form action='yorumyap.php' method='POST'>
                          <label>Kullanıcı Adı:</label>
                          <select name='username' class='input' required>
                              <option value='".$row["username"]."' selected>".$row["username"]."</option>
                              <option value='Anonim'>Anonim</option>
                              <option value='".$username."'>".$username."</option>
                          </select>
                          <label>Yorumunuz</label>
                          <textarea class='input' rows='5' name='yorum' required>".$row["yorum"]."</textarea>
                          <input type='hidden' value='".$row["yorumid"]."' name='yorumid'>
                          <input type='submit' value='Düzenle' class='btn2' name='yorumduzenle'>
                          <input type='submit' value='Sil' class='btn2' name='yorumsil'>
                          <input type='button' value='Kapat' class='btn2' onclick='yorumkapat2(".$i.");'>
                      </form>
                      </div>";
                       $i+=1;
                        }else{
                            
                            echo 
                            "<div class='yorumlar'>
                            <p><strong>Kullanıcı Adı: ".$row["username"]."</strong></p>
                            <p><strong>Yorumu:</strong></p>
                            <p>".$row["yorum"]."</p>
                            </div>";
                        }
                     

                    }
                    else {
                        echo "Bu Arşivin Yorumu Bulunmamaktadır.";
                    }
                 }
                }else {
                    echo "Yorum yok";
                }
                $baglan->close();
            
            ?>
            
        
    </section>
  <script>
      
      function yorumduzenle(i){

        document.getElementsByClassName("yorumyap2")[i].style=("display:block; border:1px solid black; text-align:left; margin: 1rem 0; border-radius: 10px; padding: 1rem;");
      }
      function yorumkapat2(i){
       document.getElementsByClassName("yorumyap2")[i].style=("display:none;");
    }
  </script>

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