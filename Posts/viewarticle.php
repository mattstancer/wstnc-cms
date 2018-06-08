<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
    <?php
        $file= __FILE__;
        $adres='http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        // $id_artykul = (int)basename($file, ".php").PHP_EOL;
        $id_artykul = $_GET['idart'];
        $link = mysql_connect("localhost", "root", "");
     $db="weststance";
    mysql_select_db($db,$link);
    $result= (mysql_query("SELECT `tresc` from `artykuly` where `artykuly`.`id_artykul` = '$id_artykul'"));
        $wiersz = mysql_fetch_assoc($result);
        echo('<p>'.$wiersz["tresc"].'</p>');
        $result= (mysql_query("SELECT `sciezka` from `pliki` join `artykuly` on `pliki`.`id_artykul` = `artykuly`.`id_artykul` where `artykuly`.`id_artykul` = '$id_artykul'"));
       while( $wiersz = mysql_fetch_assoc($result))
        {
        echo('<img src="'.$wiersz["sciezka"].'" style="width:50%"/><br />');
      
    }
  echo '<div class="fb-comments" data-href="'.$adres.'" data-numposts="3" data-colorscheme="light"></div>';
    ?>
        <div id="fb-root"></div>
<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
