<!DOCTYPE html>
<html>
       <body>
              <?php
              if(isset($_POST['submit'])){
                     print_r($_POST);
                     echo "İŞLEM BAŞARISIZ. TEKRAR DENEYİNİZ.";
              }
              else{
                     echo "GÖRÜŞ VE ÖNERİLERİNİZ DİKKATE ALINACAKTIR. TEŞEKKÜR EDERİZ.";
              }
              ?>
       </body>
</html>