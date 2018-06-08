<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <link href="../styles/StyleSheet.css" rel="stylesheet" />
    <script src="../Scripts/colorchange.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
    <div id="header"></div>
    <div style="width:800px; margin-left:auto; margin-right:auto;">
        <div class="menustyle">
            <ul style="width: 87%; margin: auto;">
                <a href="../index.html">
                    <li class="menuopen">
                        <div id="home"> Strona Glowna</div>
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
                <li class="menuclose">
                    <div id="contact">Kontakt</div>
                </li>
            </ul>
        </div>
        <div style="clear:both;" />
        <div style=" height:20px;">
        </div>
        <div class="workstation">
            <div style="width:159px; float:right; margin-right:10px; margin-top:10px; margin-left:10px;">
                <div style="clear:both;">
                </div>
                <div>
                    <div style="border-bottom:solid 1px black; margin-bottom:5px;">
                        <form enctype="multipart/form-data" action="../search.php" method="get">
                            <input type="text" name="fraza" style="width:85px;" />
                            <input type="submit" name="submit" value="szukaj" />
                        </form>
                        <div style="height:5px"></div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="nav">
                        <center>
                            Patroni
                           <a href="http://jlz1.com"><img src="../images/jlz1.png" id="jlz1"/></a>
                        </center>
                    </div>
                </div>
            </div>
            <div style="width:600px; margin-top:10px; float:left; border-right:solid 1px black; margin-bottom:10px;">
                <div style="margin-left:auto; margin-right:auto; width:560px;">
                    <form name="formularz">
                        <div class="tytul">
                            <input type="text" style="width:280px;" />
                            <div id="author" class="righter"><input style="width:90px" type="text" /></div>
                            <div class="righter">by:&nbsp;</div>
                        </div>
                        <div style="clear:both;" />
                        <div class="main">
                            <!-- tu wypelniac tresc artykulu -->
                            <textarea style="width:100%; height:200px;"></textarea>
                        </div>
                        <div class="photo1"><input type="file" name="file" id="file"></div>
                        <div class="photo2"><input type="file" name="file" id="file"></div>
                        <div class="photo3"><input type="file" name="file" id="file"></div>
                        <div class="photo4"><input type="file" name="file" id="file"></div>
                        <div class="photo5"><input type="file" name="file" id="file"></div>
                        <div class="photo6"><input type="file" name="file" id="file"></div>
                        <div class="photo7"><input type="file" name="file" id="file"></div>
                        <div class="photo8"><input type="file" name="file" id="file"></div>
                        <div class="photo9"><input type="file" name="file" id="file"></div>
                        <center><input type="submit" name="preview" value="podgląd"><input type="submit" name="send" value="wyślij"></center>
                        <!--<div id="komentarze" class="fb-comments" data-href="http://example.com/comments" data-numposts="3" data-colorscheme="light"></div>-->
                    </form></div>
            </div>
        </div>
    </div>
    <div class="footer">
    </div>
    <div id="face-slider">
        <div id="tab"></div>
        <div id="face-code">
            <div class="fb-like-box" data-href="https://www.facebook.com/weststance"
                 data-colorscheme="dark" data-show-faces="true" data-header="true"></div>
            <div id="fb-root"></div>
        </div>
    </div>
    <script>
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <script src="../Scripts/colorchange.js"></script>
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
    <div id="Div1"></div>
    <script>
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
