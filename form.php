<!DOCTYPE html>
<html>
       <body>
              <?php
              if(isset($_POST['submit'])){
                     print_r($_POST);
                     echo "FORMU DOLDURDUĞUNUZ İÇİN TEŞEKKÜR EDERİZ. EN KISA ZAMANDA DÖNÜŞ YAPILACAKTIR.";
              }
              else{
                     echo "İŞLEM BAŞARISIZ. TEKRAR DENEYİNİZ.";
              }
              ?>
       </body>
</html>