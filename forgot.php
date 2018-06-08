<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WestStance.com &#9679; Strona główna</title>
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
                    <a href="../index.html">
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
        <div style="width:1000px; margin-left:auto; margin-right:auto;">
         <div class="workstationindex">
       <div style="height:25px; width:auto;"></div>
     <?php
    /* jeżeli nie wypełniono formularza - to znaczy nie istnieje zmienna login, hasło i sesja auth
    * to wyświetl formularz logowania
    */
    
    //if (!isset($_POST['email']) && $_SESSION['auth'] == FALSE) {
    //echo '<center><p style="padding-top:10px;color:red" ;="">Błąd podczas logowania do systemu<br></center>';
    
    ?>
    <div><form name="sendpass" action="forgot.php" method="post"><div>
		<center>e-mail:&nbsp;<input name="email" type="text"/><br/>
		<input type="submit" value="Przypomnij hasło"/><br/>
		</center>
		</div>
		</form>
   <?php
    //}
    ///* jeżeli istnieje zmienna login oraz password i sesja z autoryzacją użytkownika jest FALSE to wykonaj
    ////* skrypt logowania
    //////*/
    //elseif (isset($_POST['email']) && $_SESSION['auth'] == FALSE) {
    ////// jeżeli pole z loginem i hasłem nie jest puste
    //            if (!empty($_POST['email']))  {
    //// dodaje znaki unikowe dla potrzeb poleceń SQL
    $slowo= '';
// tę ścieżkę należy dostosować do ustawień własnego systemu
$slownik = './Scripts/american-words';// słownik ispell
$wp = @fopen($slownik, 'r');

if(!$wp) {
return false;
echo "bla";
}
$wielkosc = filesize($slownik);
// przejście do losowej pozycji w słowniku
$losowa_pozycja = rand(0, $wielkosc);
fseek($wp , $losowa_pozycja);
// pobranie ze słownika następnego pełnego słowa o właściwej długości
while (strlen($slowo) <10 ||strlen($slowo)>16 || strstr($slowo, "'")) {

if (feof($wp)) 
{
fseek($wp,0); // jeżeli koniec pliku. przeskocz na początek
}
$slowo = fgets($wp, 80); //przeskoczenie pierwszego słowa. bo może być niepełne
$slowo = fgets($wp, 80); // potencjalne hasło
}
$slowo = trim($slowo); // obcięcie początkowego \n z funkCji fgets

 $send = $_POST ['sendpass'];
 $e_mail=$_POST['email'];
 $email = mysql_real_escape_string($e_mail);
    // szyfruję wpisane hasło za pomocą funkcji md5()
    /* zapytanie do bazy danych
    * mysql_num_rows - sprawdzam ile wierszy odpowiada zapytaniu mysql_query
    * mysql_query - pobierz wszystkie dane z tabeli user gdzie login i hasło odpowiadają wpisanym danym
    */
  /*  $link = mysql_connect("localhost", "root", "");
     $db="weststance";
    mysql_select_db($db,$link);
    $password=md5($slowo);
    $result= (mysql_query("update `uzytkownicy` set `haslo` = '$password' where `email`='$email'"));*/
        $title = 'Zmiana hasła do Panelu administracyjnego WestStance.com';
        $content = 'Twoje nowe hasło to '. $slowo;
        $content= wordwrap($content, 70);
        $emailnadawcy='mfjpoland@gmail.com';
        $nazwanadawcy = 'Mateusz Kowalicki';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "From: $nazwanadawcy<$emailnadawcy>\r\n".
        "Sender: $nazwanadawcy<$emailnadawcy>\r\n".
        "Reply-to: $nazwanadawcy<$emailnadawcy>\r\n".
        "Return-Path: $nazwanadawcy<$emailnadawcy>\r\n".
        'X-Mailer: PHP/' . phpversion();
        $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
         if(preg_match($pattern, $e_mail)===1)
    {
          mail($e_mail,$title,$content, $headers);
        echo '<div class="phpnagl">wysyłanie powiodlo siÄ™</div>';
    }
    else if ($e_mail!=""&&preg_match($pattern, $e_mail)!==1)
    {
        echo'<div class="phpnagl">niepoprawny adres e-mail</div>';
    }   
?>
</div>
        </div>
</div>
   <div class="bott"> <div class="patrons">
        Patroni
    </div><a href="http://www.jlz1.com/"><div class="faderpatroni"> <img src="images/jlz1black.png" id="Img2"/><img src="images/jlz1color.png" id="Img3"/></div></a>
       <a href="http://www.elsuelo.pl/"><div class="faderpatroni2"> <img src="images/elsblack.png" id="Img8"/><img src="images/elscolor.png" id="Img9"/></div></a>
   </div>
        <div class="footer">
            We<span style="font-style:italic;">s</span>t<span style="font-weight:bold;">Stance</span> &copy; 2014
        </div>

<div id="face-slider">
	<div id="tab"></div>
	<div id="face-code"><div class="fb-like-box" data-href="https://www.facebook.com/weststance" 
        data-colorscheme="dark" data-show-faces="true" data-header="true" ></div>
    <div id="fb-root"></div></div>
</div>
       
<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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