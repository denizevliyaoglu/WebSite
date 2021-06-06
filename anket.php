<!DOCTYPE html>
<html>
       <body>
              <?php
              if(isset($_POST['submit'])){
                     print_r($_POST);
                     echo "ANKETİ DOLDURDUĞUNUZ İÇİN TEŞEKKÜR EDERİZ.";
              }
              else{
                     echo "İŞLEM BAŞARISIZ. TEKRAR DENEYİNİZ.";
              }
              ?>
       </body>
</html>
