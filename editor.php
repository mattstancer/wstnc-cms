<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
<?php 
$link = mysql_connect("localhost", "root", "");
     $db="weststance";
    mysql_select_db($db,$link);
    $result= mysql_query(""); 
    
$id_art=$_GET['id'];
$wp=fopen('Posts/content/'.(string)$id_art.'.php','a');
$content = readfile('Template/template.php');
echo $content;
if (fwrite($wp, $content, strlen($content)))
echo 'artyku³ stworzony poprawnie';
?>
</body>
</html>
