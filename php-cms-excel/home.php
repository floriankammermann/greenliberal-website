<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" >
    <head>
        <title>Gr&uuml;nliberale</title>
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
        <meta name="description" content="Die Website der Grünliberalen" />
        <meta name="keywords" content="Grünliberale" />
        <meta name="robots" content="index, follow" />
        <link href="css/grunliberaleweb.css" rel="stylesheet" type="text/css" media="all">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <style type="text/css">
           div#topmenu a[href*="home"] { color: #000000; font-size: 13px; font-weight: bold; } 
        </style>
        <!--[if lt IE 7]>
        <style media="screen" type="text/css">
            .content {
            width:100%;
            }
        </style>
        <![endif]-->
    </head>
    <body>
        <div id="glpheader">
            <div id="glplogo"/>
                <span id="sektion">STADT BERN</span>
            </div>
        </div>
        <div id="topmenu">
             <?php include "resources/templates/header.php"; ?>
        </div>
        <div id="firstpicturebar"></div>
        <div id="secondpicturebar"></div>
                <div id="socialmedia">
                     <a href="http://www.facebook.com/#!/pages/Gr%C3%BCnliberale-Stadt-Bern/197704406917154">
                         <img src="img/badge/facebook_badge.png" border="0" alt="facebook">
                    </a>
                    </br>
                    <a href="http://twitter.com/#!/glp_stadt_bern">
                        <img src="img/badge/twitter_badge.png" border="0" alt="twitter">
                    </a>
                </div>
        <div id="rightbar"></div>
        <div id="colmask">
            <div id="colmid">
                <div id="colleft">
                    <div id="colleftleft">
                        <div id="contentwrap">
                            <div id="content">
                                <div style="float: right;">
                                    <a class="image" href="homefeed.php">
                                        <img src="img/feed/feed-icon.png" />
                                    </a>
                                </div>
                                 <?php
                                    require_once 'resources/library/excel/reader.php';
                                    $data = new Spreadsheet_Excel_Reader();
                                    $data->read('resources/content/glp_stadtbern_medienmitteilungen.xls');
                                    $columnIndex = 1;
                                    $title1 = "";
                                    do {
                                        $polit = $data->sheets[0]['cells'][$columnIndex][1];
                                        $title1 = $data->sheets[0]['cells'][$columnIndex][2];
                                        $title2 = $data->sheets[0]['cells'][$columnIndex][3];
                                        $text = $data->sheets[0]['cells'][$columnIndex][4];
                                        $attachmentnames = $data->sheets[0]['cells'][$columnIndex][5];
                                        $attachments = $data->sheets[0]['cells'][$columnIndex][6];
                                        $columnIndex++;
                                        
                                        $attachmentnamesArr = explode(",", $attachmentnames);
                                        $attachmentsArr = explode(",", $attachments);
                                        
                                        print("<h1>");
                                        print($title1);
                                        print("</h1>");
                                        print("<h2>");
                                        print($title2);
                                        print("</h2>");
                                        print("<p>");
                                        print($text);
                                        print("</p>");
                                        print("<p>");
                                        for ($i = 0; $i < count($attachmentnamesArr); ++$i) {
                                            print("<a href=\"");
                                            if(strpos($attachmentsArr[$i], 'http') === false){
                                                print("http://www.bern.grunliberale.ch/dokumente/");
                                            }
                                            print($attachmentsArr[$i]);
                                            print("\" target=\"_blank\">");
                                            print($attachmentnamesArr[$i]);
                                            print("</a>");
                                            print("<span style=\"padding-right: 10px;\"></span>");
                                        }
                                        print("</p>");
                                    }while(! empty($title1))
                                ?>
                            </div>
                        </div>
                        <div id="leftmenuwrap">
                            <div id="leftmenu">
                                <?php include "resources/templates/leftmenuhome.php"; ?>
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
