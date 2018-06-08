<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="styles/StyleSheet.css" rel="stylesheet" />
    <title></title>
</head>
<body style="background-color:white;">
<?php
$link = mysql_connect("localhost", "root", "");
    $db="weststance";
    mysql_select_db($db,$link);
    $result= (mysql_query("SELECT `sciezka`,`pliki`.`id_artykul` AS `id_art`, `artykuly`.`tytul` AS `title`  from `pliki` join `artykuly` on `pliki`.`id_artykul` = `artykuly`.`id_artykul` where `pliki`.`tytulowy`=true  order by `artykuly`.`id_artykul` desc limit 3"));
     while( $wiersz = mysql_fetch_assoc($result))
        {
    echo '<div class="top"><div class="fader"><a href="posts/viewarticle.php?idart='.$wiersz["id_art"].'"><img src="posts/'.$wiersz["sciezka"].'" id="Img5" class="bottom"/><img src="posts/bwphoto.php?sciezka='.$wiersz["sciezka"].'" id="Img4" class="top"/></a></div><div class="tytle">'.$wiersz["title"].'</div></div>';
    }
    ?>
</body>
</html>
