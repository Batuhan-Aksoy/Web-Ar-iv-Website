<?php 

include "baglanti.php";
$karsivid=$_GET["karsivid"];


$sql = "SELECT karsivid, karsivadi FROM karchives";
$result = $baglan->query($sql);
    while($row = $result->fetch_assoc()) { 

            if($karsivid==$row["karsivid"])
            {
                $uzanti="C:xampp/htdocs/Web Arşiv/kisisel/".$row["karsivadi"];
                break;
            }
    }

$sql2 ="DELETE FROM karchives WHERE karsivid=$karsivid"; 
        if($baglan->query($sql2)===TRUE)
        {
              unlink($uzanti);
              echo "<script>alert('Dosya Silme İşlemi Başarılı.')</script>";
              header("Refresh:0; url=kullanici.php");
        }else{
            echo "hata: " . $sql . "<br>" . $baglan->error;
        }
        $baglan->close();

?>