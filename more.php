<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<head>
    <title>WestStance.com &#9679; Więcej artykułów</title>
    <link href="styles/StyleSheet.css" rel="stylesheet" />
    <script src="Scripts/colorchange.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
     
</head>
<body>
        <header style="position:relative; height:50px; width: 100%; background-color:#181818; top:-8px; padding:0px;">
        <div style="margin-left:auto; margin-right:auto; width:1000px; height:50px;"> <form enctype="multipart/form-data" action="../search.php" method="get">
                      <div id="date"></div>  
            <input type="text" name="fraza" id="search" style="" value="szukaj"/>
                       </form></div><div style="clear:both;"></div>
    </header>
    <script>
        var search = document.getElementById("search");
        search.onclick = function () {
            if (search.value == "szukaj")
                search.value = "";
        };
             </script>
    <script src="Scripts/currentdate.js"></script>
    <div id="header"></div>
    <div style="width:800px; margin-left:auto; margin-right:auto;">
        <div id="ramka">
            <div class="menustyle">
                <ul style="width: 87%; margin: auto;">
                    <a href="../index.php">
                        <li class="menuopen">
                            <div id="home"> <span>S</span>trona Główna</div>
                        </li>
                    </a>
                    <a href="../about.html">
                        <li class="menu">
                            <div id="about">O nas</div>
                        </li>
                    </a>
                    <li class="menu">
                        <div id="crew">Crew</div>
                    </li>
                    <li class="menu">
                        <div id="events">Events</div>
                    </li>
                    <a href="../contact.php">
                    <li class="menuclose">
                        <div id="contact">Kontakt</div>
                    </li></a>
                </ul>
            </div>
        </div>
        <div style="clear:both;" />
        <div style=" height:20px;" >
            </div></div></div>
    <div style="clear:both;"></div>
<?php
$link = mysql_connect("localhost", "root", "");
$db="weststance";
mysql_select_db($db,$link);
$count=5;
$offset=0;


if(isset($_GET['count']))$count = $_GET['count'];
if(isset($_GET['offset']))$offset = $count*$_GET['offset'];
$result= (mysql_query("Select count(*) from artykuly"));

$r = mysql_fetch_array($result);
$pages = ceil($r[0]/$count);
$result= (mysql_query("SELECT `sciezka`,`pliki`.`id_artykul` AS `id_art`, 
`artykuly`.`tytul` AS `title`, `artykuly`.`id_uz` as `id_uz`, `artykuly`.`data` as `data`
from `pliki` join `artykuly` on `pliki`.`id_artykul` = `artykuly`.`id_artykul` 
where `pliki`.`tytulowy`=true  order by `artykuly`.`id_artykul` desc Limit $count offset $offset"));
//Początek tabeli
echo '<div class="artmore"><div style="height:6px; width:auto;"></div>';
//Pętla po wszystkich rekordach
while(($wiersz=mysql_fetch_array($result))!=NULL){
    echo '<div class="fotart">
    <a href="posts/viewarticle.php?idart='.$wiersz["id_art"].'">
    <img src="posts/'.$wiersz["sciezka"].'" class="fotomore"/>
    </a></div><div class="tytlemore">'.$wiersz["title"].'</div>
    <div class="morefoot"><span class="fontmore">autor: '.$wiersz["id_uz"].
    '</span><div class="rightmore"><span class="fontmore">Data dodania: '.$wiersz["data"].
    '</span></div></div><div style="height:7px; width:auto;"></div>';
}
//Pętla po stronach
if ($pages>1){
echo '<div class="fontmore" style="text-align:center; font-size:14pt;">';
for($i=0;$i<$pages;$i++){
    //jeśli obecna strona, nie twórz linku do strony
    $j=$i+1;
    if($i*$count==$offset){
        echo '<span style="font-weight:bold;"> '.$j.' </span>';
    }else{
        echo '<span class="fontmore" style="font-size:14pt; text-decoration:none;"><a href="more.php?count='.$count.'&offset='.$i.'"><span style="color:black;">'.$j.'</span> </a></span>';
    }
}
echo'<div style="height:15px; width:auto;"></div></div>';
}
echo '</div>';
?>
<div style=clear:both;></div>
<div class="bott"> 
<div class="patrons">
        Patroni
    </div><a href="http://www.jlz1.com/"><div class="faderpatroni"> <img src="images/jlz1black.png" id="Img2"/><img src="images/jlz1color.png" id="Img3"/></div></a>
       <a href="http://www.elsuelo.pl/"><div class="faderpatroni2"> <img src="images/elsblack.png" id="Img8"/><img src="images/elscolor.png" id="Img9"/></div></a>
       <a href="https://www.facebook.com/DroppedLike/"><div class="faderpatroni3"> <img src="images/droppedblack.png" id="Img10"/><img src="images/droppedcolor.png" id="Img11"/></div></a>
   </div>
        <div class="footer">
            We<span style="font-style:italic;">s</span>t<span style="font-weight:bold;">Stance</span> &copy; 2014
        </div></div>

<div id="face-slider">
	<div id="tab"></div>
	<div id="face-code"><div class="fb-like-box" data-href="https://www.facebook.com/weststance" 
        data-colorscheme="dark" data-show-faces="true" data-header="true" ></div>
    <div id="fb-root"></div></div>
</div>
<a href="#" class="gora"></a>
        <script src="Scripts/unslider.js"></script>
    <script>
        $(function () {
            $('.banner').unslider();
        });
    </script>
<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <script src="Scripts/scroll.js"></script>
    <script src="Scripts/animate.js"></script>
    <script src="Scripts/slidescript.js"></script>
    <script src="Scripts/colorchange.js"></script>
    <script>
        a = true;
        $(function () {
            $('#face-slider').click(
                function () {
                    if (a == true) {
                        $('#face-slider').stop().animate({ "right": "0" }, 1000);
                        a = false;
                    }
                    else if (a == false) {
                        $('#face-slider').stop().animate({ "right": "-302px" }, 1000); a = true;
                    }
                });
        });
</script>
</body>
</html>
