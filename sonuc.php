<!DOCTYPE html>
<html>
       <body>
              <?php
                     $aramasorgusu = @mysql_real_escape_string($_POST['aramasorgusu']);
                     $sonucsorgu = @mysql_query("SELECT * FROM sayfa WHERE banner LIKE '%".$aramasorgusu."%'" );
                     if(@mysql_num_rows($sonucsorgu)>0){
                     while($sorguoku=@mysql_fetch_array($sonucsorgu)){
                     echo $sorguoku['banner'].'<br>';
                     }
                     }
                     else{
                     echo 'Aradığınız içerik bulunamadı!';
                     }
              ?>
       </body>
</html>