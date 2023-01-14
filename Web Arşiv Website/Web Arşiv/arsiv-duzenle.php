<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arşiv Düzenleme</title>
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
      if($_GET)
      {
         $_SESSION["duzenlearsivid"]=$_GET["arsivid"]; 
      }
      $arsivid = $_SESSION["duzenlearsivid"];

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
    <section class="kcontainer4">
        <h2>Arşivinizi Düzenleyebilirsiniz.</h2>
         <br>
        <?php 

         include "baglanti.php";

         $sql = "SELECT * FROM archives";
         $result = $baglan->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
         
           if($arsivid==$row["arsivid"])
           {
               
               $arsivturu=$row["arsivturu"];
               $arsivadi=$row["arsivadi"];
               $arsivkategori=$row["arsivkategori"];
               $arsivaciklama=$row["arsivaciklama"];
               $arsivicerik=$row["arsivicerik"];
               break;
           }
        }
      }else{
          echo "veri yok";
      }
   
        echo "
          <form action='duzenle.php' method='POST' enctype='multipart/form-data'>
          <label>Arşiv Türü:</label>
          <select name='arsivturu'  class='input' required>
              <option value='". $arsivturu."' selected>".$arsivturu."</option>
              <option value='Anonim Arşiv'>Anonim Arşiv</option>
              <option value='Kullanıcı Bazlı Arşiv'>Kullanıcı Bazlı Arşiv</option>
          </select>
          <label>Arşiv Adı:</label>
          <input type='text' name='arsivadi' class='input' value='".$arsivadi."'  minlength='2' maxlength='100' required>
        
          <label>Arşiv Kategorisi:</label>";

          echo "<select name='arsivkategori'  class='input' required>
          <option value='".$arsivkategori."' selected>".$arsivkategori."</option>";
           
          $sql2 = "SELECT kategoriadi FROM categories";
          $result2 = $baglan->query($sql2);
          
            if ($result2->num_rows > 0) {
            while($row2 = $result2->fetch_assoc()) {
              echo "<option value='".$row2["kategoriadi"]."'>".$row2["kategoriadi"]."</option>";
            }
          } else {
            echo "Veri Yok";
          }
          $baglan->close();

          echo "</select>";
          
         echo " <br><br>
          <label>Arşiv Fotoğrafı:</label><br>
          <input type='File' accept='.png, .jpg, .jpeg' name='arsivfoto' class='input'><br>
 
          <label>Arşiv Açıklama:</label>
          <input type='text' name='arsivaciklama' class='input' value='".$arsivaciklama."'  minlength='2' maxlength='200' required>

          <label>Arşiv İçeriği:</label>
          <textarea class='input' rows='10' minlength='10' name='arsivicerik' required>".$arsivicerik."</textarea>
          <input type='hidden' name='arsivid' value='".$arsivid."'>
          <input type='submit' value='Arşivi Düzenle' class='btn2'>
          <input type='submit' value='Arşivi Sil' class='btn2' name='arsivsil'>
          <input type='reset' value='Temizle' class='btn2'>
          
         </form>
        </form>"; 
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