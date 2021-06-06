<!DOCTYPE html>
<html>
       <body>
              <?php
              if(isset($_POST['submit'])){
                     print_r($_POST);
                     echo "GÖRÜŞ VE ÖNERİLERİNİZ DİKKATE ALINACAKTIR. TEŞEKKÜR EDERİZ.";
              }
              else{
                     echo "İŞLEM BAŞARISIZ. TEKRAR DENEYİNİZ.";
              }
              ?>
       </body>
</html>