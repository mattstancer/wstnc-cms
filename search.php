<?php
$button = $_GET ['submit'];
$search = $_GET ['fraza']; 

if(strlen($search)<=1)
    echo "Szukana wartość jest za krótka";
else{
    echo "<div>Wyniki wyszukiwania dla $search</div>";
    $search_exp = explode(" ",$search);
    foreach ($search_exp as $search_each)
    {
        $x++;
        if ($x==1)
        {
        $reqt.="`artykuly`.`tytul` like '%$search_each%' or `artykuly`.`id_uz`
        like '%$search_each%' or `artykuly`.`tresc` like '%$search_each%'";
        }
        else $reqt.=" or `artykuly`.`tytul` like '%$search_each%' or `artykuly`.`id_uz`
        like '%$search_each%' or `artykuly`.`tresc` like '%$search_each%'";

    }
    $link = mysql_connect("localhost", "root", "");
    $db="weststance";
    mysql_select_db($db,$link);
    $sqlq="SELECT `sciezka` , `pliki`.`id_artykul` AS `id_art`, `artykuly`.`tytul` AS `title`, `artykuly`.`id_uz` as `autor`, `artykuly`.`data` as `date_cr` FROM `pliki` JOIN `artykuly` ON `pliki`.`id_artykul` = `artykuly`.`id_artykul` WHERE `pliki`.`tytulowy` = TRUE AND ($reqt)";
    //$sqlq;
    $result= mysql_query($sqlq);
    if (mysql_num_rows($result)){
    while($wiersz = mysql_fetch_assoc($result))
    {
        echo '<img src ="posts/'.$wiersz['sciezka'].'" style="width:190px"/>';
    }
    }
}
?>