<!DOCTYPE html>
<html>
       <body>
              <?php
                     $host="localhost";
                     $user="root";
                     $password="root";
                     $db="sayfa";
                     $port=3307;

                     $baglanti=mysql_connect($host,$user,$password) or die ("mysql bağlantı yapılamadı");
                     mysql_select_db($db,$baglanti) or die ("veritabanına bağlanamadı");


                     $link=mysql_connect(
                            "$host:$port",
                            $user,
                            $password
                     );
                     $db_selected=mysql_select_db(
                            $db,
                            $link
                     );
              ?>


       </body>
</html>