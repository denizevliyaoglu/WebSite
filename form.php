<!DOCTYPE html>
<html>
       <body>
              <?php
              if(isset($_POST['submit'])){
                     print_r($_POST);
                     echo "İŞLEM BAŞARISIZ. TEKRAR DENEYİNİZ.";
              }
              else{
                     echo "FORMU DOLDURDUĞUNUZ İÇİN TEŞEKKÜR EDERİZ. EN KISA ZAMANDA DÖNÜŞ YAPILACAKTIR.";
              }
              ?>
       </body>
</html>