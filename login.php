    
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
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
         <div style="width:1000px; margin-left:auto; margin-right:auto;">
         <div class="workstationindex">
       <div style="height:25px; width:auto;"></div>
	 <?php
    /* jeżeli nie wypełniono formularza - to znaczy nie istnieje zmienna login, hasło i sesja auth
    * to wyświetl formularz logowania
    */
    
    if (!isset($_POST['login']) && !isset($_POST['password']) && $_SESSION['auth'] == FALSE) {
    //echo '<center><p style="padding-top:10px;color:red" ;="">Błąd podczas logowania do systemu<br></center>';
    
    ?>
    <div><form name="form-logowanie" action="login.php" method="post"><div>
		<center>Login:&nbsp;<input name="login" type="text"/><br/>
		Haslo:&nbsp;<input name="password" type="password"/><br/>
		<input type="submit" value="zaloguj"/><br/>
		<a href="forgot.php"><div style="font-size:8pt; text-decoration:none; color:#000;">Zapomniałem hasła</div></a></center>
		</div>
		</form></div>
   <?php
    }
    /* jeżeli istnieje zmienna login oraz password i sesja z autoryzacją użytkownika jest FALSE to wykonaj
    * skrypt logowania
    */
    elseif (isset($_POST['login']) && isset($_POST['password']) && $_SESSION['auth'] == FALSE) {
    // jeżeli pole z loginem i hasłem nie jest puste
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
    // dodaje znaki unikowe dla potrzeb poleceń SQL
    $login = mysql_real_escape_string($_POST['login']);
    $password = mysql_real_escape_string($_POST['password']);
    // szyfruję wpisane hasło za pomocą funkcji md5()
    $password = md5($password);
    /* zapytanie do bazy danych
    * mysql_num_rows - sprawdzam ile wierszy odpowiada zapytaniu mysql_query
    * mysql_query - pobierz wszystkie dane z tabeli user gdzie login i hasło odpowiadają wpisanym danym
    */
    $link = mysql_connect("localhost", "root", "");
     $db="weststance";
    mysql_select_db($db,$link);
    $result= (mysql_query("SELECT * FROM `uzytkownicy` WHERE `nazwa_uz` = '$login' AND `haslo` = '$password'"));
    
    //echo $result.toString;
    $sql = mysql_num_rows($result);
    //echo $sql ."rows";
    // jeżeli powyższe zapytanie zwraca 1, to znaczy, że dane zostały wpisane poprawnie i rejestruję sesję
    if ($sql == 1) {
    // zmienne sesysje user (z loginem zalogowanego użytkownika) oraz sesja autoryzacyjna ustawiona na TRUE
    $_SESSION['user'] = $login;
    $_SESSION['auth'] = TRUE;
    //przekierwuję użytkownika na stronę z ukrytymi informacjami
    echo '<meta http-equiv="refresh" content="1; URL=hide.php">';
    echo '<p style="padding-top:10px;"><strong>Proszę czekać...</strong><br>trwa logowanie i wczytywanie danych<p></p>';
    }
    // jeżeli zapytanie nie zwróci 1, to wyświetlam komunikat o błędzie podczas logowania
    else {
    echo '<center><p style="padding-top:10px;color:red" ;="">Błąd podczas logowania do systemu<br></center>';
    echo '<center><a href="login.php" style="font-size:8pt;">Wróć do formularza</a></p></center>';
    }
    }
    // jeżeli pole login lub hasło nie zostało uzupełnione wyświetlam błąd
    else {
        echo '<center><p style="padding-top:10px;color:red" ;="">Błąd podczas logowania do systemu<br></center>';
        echo '<center><a href="login.php" style="font-size:8pt;">Wróć do formularza</a></p></center>';
    }
    }
    ?> 
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

    </div><div id="face-slider">
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