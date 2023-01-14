<?php 
    include "baglanti.php";
    session_start();
    $arsivid=$_POST["arsivid"];
    $arsivturu=$_POST["arsivturu"];
    $arsivadi=$_POST["arsivadi"];
    $arsivkategori=$_POST["arsivkategori"];

    $arsivfoto=$_FILES["arsivfoto"]["name"];

    $arsivaciklama=$_POST["arsivaciklama"];
    $arsivicerik=$_POST["arsivicerik"];

    if(isset($_POST["arsivsil"]))
    {
        $sql2="SELECT arsivid,arsivfoto FROM archives";
           $result2 = $baglan->query($sql2);
           while($row2 = $result2->fetch_assoc()) { 
                   if($row2["arsivid"]==$arsivid)
                   {
                       $fotoyolu="C:xampp/htdocs/Web Arşiv/images/".$row2["arsivfoto"]; 
                       break;       
                   }
           }

        $sql ="DELETE FROM archives WHERE arsivid=$arsivid";
        if($baglan->query($sql)===TRUE)
        {
            //silme başarılı ise ilgili kategoriden arsiv sayısını azaltma
            $sql3 = "SELECT kategoriadi,arsivsayisi FROM categories";
           $kategoriarsivsayisi=0;
           $result3 = $baglan->query($sql3);
              while($row3 = $result3->fetch_assoc()) {

                 if($arsivkategori==$row3["kategoriadi"])
                       {
                            $kategoriarsivsayisi=$row3["arsivsayisi"];  
                       }
                   
              }
              $kategoriarsivsayisi-=1;
             $sql4="UPDATE categories SET arsivsayisi='$kategoriarsivsayisi' WHERE kategoriadi='$arsivkategori'";
             $baglan->query($sql4);

            
           unlink($fotoyolu); 
           echo "<script>alert('Arşiv Başarıyla Silindi')</script>";
           header("Refresh:0; url=kullanici.php");
        }
        else{
           echo "hata: " . $sql . "<br>" . $baglan->error;
        }
    }
    else
    {

         //arsiv türü kontrol
    if($arsivturu=="Anonim Arşiv")
    {
        $username="Anonim";
    }else{
        $username=$_SESSION["username"];
    }
    
          //arsivkategori kontrol düzenlerken değiştimi diye
          $arsivkategoriyeni=NULL;
          $arsivkategorieski=Null;
          $sql3="SELECT arsivid,arsivkategori FROM archives";
          $result3 = $baglan->query($sql3);
          while($row3 = $result3->fetch_assoc()) {
              if($row3["arsivid"]==$arsivid)
              {
                     
                if($row3["arsivkategori"] != $arsivkategori)
                {
                    $arsivkategoriyeni=$arsivkategori;
                    $arsivkategorieski=$row3["arsivkategori"];
                    break;
                }
                else{

                    $arsivkategorieski=$row3["arsivkategori"];
                }
              }

          }


           //düzenlemeden sonra klasördeki eski fotonun silinmesi için veritabanındaki eski foto adını çekme
           $sql2="SELECT arsivid,arsivfoto FROM archives";
           $result2 = $baglan->query($sql2);
           while($row2 = $result2->fetch_assoc()) { 
                   if($row2["arsivid"]==$arsivid)
                   {
                       $fotoyolu="C:xampp/htdocs/Web Arşiv/images/".$row2["arsivfoto"]; 
                       break;       
                   }
           }


    //arsiv foto kontrolü
    if($arsivfoto == NULL)
    {
        $sql="UPDATE archives SET username='$username',arsivadi='$arsivadi',arsivturu='$arsivturu',arsivkategori='$arsivkategori'
        ,arsivaciklama='$arsivaciklama',arsivicerik='$arsivicerik' WHERE arsivid=$arsivid ";
    }
    else
    {
        $uzanti=$_FILES["arsivfoto"]["type"];
        if($uzanti == "image/jpeg" || $uzanti == "image/png"){


         if($_FILES["arsivfoto"]["size"]>200000){
                echo "<script>alert('Fotoğraf Boyutu 200kb den yüksek olamaz.')</script>";
                header("Refresh: 0; url=arsiv-duzenle.php");
         }else
         {
             $sql="UPDATE archives SET username='$username',arsivadi='$arsivadi',arsivturu='$arsivturu',arsivkategori='$arsivkategori'
             ,arsivfoto='$arsivfoto',arsivaciklama='$arsivaciklama',arsivicerik='$arsivicerik' WHERE arsivid=$arsivid ";
         }
        
        }
        else {
            echo "<script>alert('Arşiv Fotoğrafı olarak sadece jpg, jpeg, png uzantılı fotoğraf yüklenebilir.')</script>";
            header("Refresh: 0; url=arsiv-duzenle.php");  
        }

    }
       //güncelleme başarılı ise eski foto silinir yeni foto eklenir eğer foto değişti ise
    if($baglan->query($sql)===TRUE)
   {
        //eski kategorinin arşiv sayısını 1 azalttıp yeniyi 1 arttırma
        if($arsivkategoriyeni != NULL)
         { 
            $sql4 = "SELECT kategoriadi,arsivsayisi FROM categories";
            $kategoriarsivsayisi2=0;
            $result4 = $baglan->query($sql4);
              while($row4 = $result4->fetch_assoc()) {

                 if($arsivkategorieski==$row4["kategoriadi"])
                       {
                            $kategoriarsivsayisi2=$row4["arsivsayisi"];  
                            break;
                       }
                   
              }
             $kategoriarsivsayisi2 -= 1;
             $sql5="UPDATE categories SET arsivsayisi='$kategoriarsivsayisi2' WHERE kategoriadi='$arsivkategorieski'";
             $baglan->query($sql5);
              
            $sql6 = "SELECT kategoriadi,arsivsayisi FROM categories";
            $kategoriarsivsayisi3=0;
            $result6 = $baglan->query($sql6);
              while($row6 = $result6->fetch_assoc()) {

                 if($arsivkategoriyeni==$row6["kategoriadi"])
                       {
                            $kategoriarsivsayisi3=$row6["arsivsayisi"];  
                            break;
                       }
                   
              }
             $kategoriarsivsayisi3 += 1;
             $sql7="UPDATE categories SET arsivsayisi='$kategoriarsivsayisi3' WHERE kategoriadi='$arsivkategoriyeni'";
             $baglan->query($sql7);   
         }         
           
        //düzenlerken foto değişmedi ise eskisini silme ve yenisini ekleme olmamalı
        if($arsivfoto != NULL)
        {
            unlink($fotoyolu);
            if(is_uploaded_file($_FILES["arsivfoto"]["tmp_name"]))//dosya geldimi kontrolü
         {
            move_uploaded_file($_FILES["arsivfoto"]["tmp_name"],"images/".$arsivfoto);//dosyayı klasöre ekleme fonku
         }
         else {
           echo "<script>alert('Dosya Yüklenirken hata oluştu.')</script>";
           header("Refresh: 0; url=kullanici.php");
         } 

        }

        
      echo "<script>alert('Düzenleme Başarılı')</script>";
      header("Refresh:0; url=kullanici.php");
   }
   else{
       echo "hata: " . $sql . "<br>" . $baglan->error;
   }
}
?>