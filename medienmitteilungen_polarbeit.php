<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="de-CH">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=Windows-1252;">
        <title>Grünliberale Partei Stadt Bern</title>
        <meta http-equiv="language" content="de">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Die Medienmitteilungen der Grünliberale Partei der Stadt Bern">
        <meta name="keywords" content="Grünliberale, grünliberal, gruenliberal, Gruenliberale, Grün-liberale, Gruen-liberale, Partei, politische Partei, Parteien, oekologisch, Bern, Stadt Bern, Grüne, gruene, Nachhaltigkeit">
        <meta name="robots" content="index, follow">
        <link href="css/grunliberaleweb.css" rel="stylesheet" type="text/css" media="all">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <div id="glpheader">
            <div id="glplogo">
                <span id="sektion">STADT BERN</span>
            </div>
        </div>
        <div id="topmenu">
             <?php include "resources/templates/header.php"; ?>
        </div>
        <div id="firstpicturebar"></div>
        <div id="secondpicturebar"></div>
        <?php include "resources/templates/socialmedia.php"; ?>
        <div id="rightbar"></div>
        <div id="colmask">
            <div id="colmid">
                <div id="colleft">
                    <div id="colleftleft">
                        <div id="contentwrap">
                            <div id="content">
                                <h1>Medienmitteilungen</h1>
                                  <?php
                                     include 'resources/templates/news.php';
                                     news('medienm');
                                  ?>
                            </div>
                        </div>
                        <div id="photocolumnwrap">
                            <div id="photocolumn">
                            </div>
                        </div>
                        <div id="leftmenuwrap">
                            <div id="leftmenu">
                                <?php include "resources/templates/leftmenupolarbeit.php"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footerkontakt">
                <div>
                    <?php include "resources/templates/footerkontakt.php"; ?>
                </div>
            </div>
        </div>
    </body>
</html>
