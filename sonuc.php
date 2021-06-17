<!DOCTYPE html>
<html>
       <body>
              <?php
              include("sql.php");
              $ara=$_POST["aranan"];

              $sql=mysql_query("SELECT * FROM sayfa WHERE banner LIKE '%$ara%'");

              $bul = mysql_num_rows($sql);

              if($bul > 0) {
              while($yaz=mysql_fetch_array($sql)) {
              $anasayfa=$yaz['anasayfa'];
              $makaleler=$yaz['makaleler'];
              $sinav=$yaz['sınav'];
              $anketform=$yaz['anketform'];
              $iletisim=$yaz['iletisim'];
              }
              } else {
              echo "<br>";
              echo "<font color='gray' size='4'>Aradığınız kelime ile ilgili bir  sonuç bulunamadı</font>";
              };
              
       ?>
       </body>
</html>