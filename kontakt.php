<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="de-CH">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta http-equiv="content-type" content="text/html; charset=Windows-1252;">
        <title>Grünliberale Partei Stadt Bern</title>
        <meta http-equiv="language" content="de">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Die Medienmitteilungen der Grünliberale Partei der Stadt Bern">
        <meta name="keywords" content="Grünliberale, grünliberal, gruenliberal, Gruenliberale, Grün-liberale, Gruen-liberale, Partei, politische Partei, Parteien, oekologisch, Bern, Stadt Bern, Grüne, gruene, Nachhaltigkeit">
        <meta name="robots" content="index, follow">
        <link href="/css/grunliberaleweb.css" rel="stylesheet" type="text/css" media="all">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <style type="text/css">
           div#topmenu a[href*="kontakt"] { color: #000000; font-weight: bold; } 
        </style>
 		<script type="text/javascript">
            function FormularPruefen()
            {
            var Formular = document.KontaktMail
            if (Formular.vorname.value == "")
            {
                alert("Bitte tragen Sie Ihren Vornamen ein.")
                Formular.vorname.focus()
                return false
            }
            if (Formular.name.value == "")
            {
                alert("Bitte tragen Sie Ihren Namen ein.")
                    Formular.name.focus()
                    return false
            }
            if (Formular.email.value == "")
            {
                    alert("Bitte tragen Sie Ihre E-Mail ein.")
                Formular.email.focus()
                            return false
            }
                                    if (Formular.email.value.indexOf("@") == -1)
                                   {
                                        alert("Ihre Email Adresse existiert nicht");
                Formular.email.focus();
                                                    return false;
                                    }
                    var t=Formular.themen.value;
            if (t.indexOf("http:")!=-1 || t.indexOf("https:")!=-1 || t.indexOf("www.")!=-1)					{
                             alert("Wegen zu vieler SPAM-Anmeldungen können leider keine Webadressen übermittelt werden. Bitte geben Sie Ihren Text ohne www oder http ein.");
                 Formular.themen.focus();
                 return false;
                                    }
                                    var t=Formular.bemerkung.value;
            if (t.indexOf("http:")!=-1 || t.indexOf("https:")!=-1 || t.indexOf("www.")!=-1)	
                                    {
                 alert("Wegen zu vieler SPAM-Anmeldungen können leider keine Webadressen übermittelt werden. Bitte geben Sie Ihren Text ohne www oder http ein.");
                 Formular.bemerkung.focus();
                     return false;
                     }
             var t=Formular.aufmerksam.value;
            if (t.indexOf("http:")!=-1 || t.indexOf("https:")!=-1 || t.indexOf("www.")!=-1)	
                                {
                                         alert("Wegen zu vieler SPAM-Anmeldungen können leider keine Webadressen übermittelt werden. Bitte geben Sie Ihren Text ohne www oder http ein.");
                             Formular.aufmerksam.focus();
                 return false;
             }

                               
            return true
            }
 		</script>
    </head>
    <body>
        <?php include "resources/templates/header.php"; ?>
        <?php include "resources/templates/topmenu.php"; ?>
        <?php include "resources/templates/picturebars.php"; ?>
        <?php include "resources/templates/socialmedia.php"; ?>
        <div id="rightbar"></div>
        <div id="colmask">
            <div id="colmid">
                <div id="colleft">
                    <div id="colleftleft">
                        <div id="contentwrap">
                            <div id="content">
                        	  <h1>Kontakt</h1>
                                  <p>Gr&uuml;nliberale Partei Stadt Bern <br>
                                    Postfach 6414<br>
                                    3001 Bern<br>
                                    <br>
                                    eMail
                                    <script type="text/javascript">
                                    document.write('<a href="mailto:');
                                    var a='bern';
                                    document.write(a);
                                    document.write('@');
                                    var b='grunliberale.ch';
                                    document.write(b+'">'+a);
                                    document.write('@');
                                    document.write(b+'</');
                                    document.write('a>');
                                    </script>
                                </p>
                                <p>Wir freuen uns auf einen pers&ouml;nlichen Kontakt mit Ihnen.</p>
                                <p>PC-Konto: 60-309368-5 <br>
                                Herzlichen Dank f&uuml;r Ihre Unterst&uuml;tzung! </p>
                                <h1>Anmeldeformular</h1>
                                  <form action="http://www.grunliberale.ch/cgi-bin/formmail.cgi" method="post" onSubmit="return FormularPruefen()">
                                    <fieldset>
                                    <legend>Bitte tragen Sie sich hier ein!</legend>
                                    <input type="hidden" name="recipient" value="be@grunliberale.ch">
                                    <input type="hidden" name="subject" value="Anmeldung Grünliberale Stadt Bern">
                                    <input type="hidden" name="redirect" value="http://be.grunliberale.ch/danke.htm">
                                    <input type="hidden" name="sort" value="order:mitglied,newsletter,fragen,anrede,vorname,name,strasse,adresszusatz,plz,ort,tel,email,aufmerksam,jahrgang,taetigkeit,themen,bemerkung">
                                    <input type="hidden" name="print_config" value="email">
                                    <table border="0" width="90%" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td class="platzhalter">
                                            <img src="http://www.grunliberale.ch/bilder/alle/platzhalter.gif" alt="" width="75" height="1">								</td>
                                            <td class="platzhalter">
                                            <img src="http://www.grunliberale.ch/bilder/alle/platzhalter.gif" alt="" width="75" height="1">								</td>
                                        </tr>
                                        <tr>
                                            <td class="beschrieb">
                                            <input id="mitglied" name="mitglied" type="checkbox" value="Ich möchte Mitglied werden" class="oder" title="mitglied">								</td>
                                            <td class="input">
                                              Ich m&ouml;chte Mitglied werden.<br>
                                              Mitgliederbeitrag: 120.-/Jahr, Wenigverdienende 40.-/Jahr
                                            </td>
                                      </tr>
                                        <tr>
                                            <td class="beschrieb">
                                            <input id="newsletter" name="newsletter" type="checkbox" value="Ich m&ouml;chte den Newsletter abonnieren" class="oder" title="newsletter">								</td>
                                            <td class="input">
                                            Ich m&ouml;chte den Newsletter abonnieren.								</td>
                                        </tr>
                                        <tr>
                                            <td class="beschrieb">
                                            <input id="fragen" name="fragen" type="checkbox" value="Ich habe Fragen oder bin an einer aktiven Mitarbeit interessiert, bitte nehmen Sie mit mir Kontakt auf" class="oder" title="fragen">								</td>
                                            <td class="input">
                                            Ich habe Fragen oder bin an einer aktiven Mitarbeit interessiert, bitte nehmen Sie mit mir Kontakt auf.<br><br>								</td>
                                        </tr>
                                        <tr>
                                            <td class="beschrieb">
                                            <label>Anrede</label>								</td>
                                            <td class="input">
                                            <select id="anrede" name="anrede" size="1">
             
                                                <option value="Auswahl">Bitte ausw&auml;hlen</option>
                                                <option value="Herr">Herr</option>
                                                <option value="Frau">Frau</option>
                                            </select>							</td>
                                    </tr>
                                    <tr>
                                        <td class="beschrieb">
                                            <label for="vorname">Vorname</label>							</td>
                                        <td class="input">
                                            <input name="vorname" id="vorname" type="text" size="37">							</td>
                                    </tr>
                                
                                    <tr>
                                        <td class="beschrieb">
                                            <label for="name">Name</label>							</td>
                                        <td class="input">
                                            <input name="name" id="name" type="text" size="37">							</td>
                                    </tr>
                                
                                    <tr>
                                        <td class="beschrieb">
                                            <label for="strasse">Strasse</label>							</td>
                                        <td class="input">
                                        <input name="strasse" id="strasse" type="text" size="37">							</td>
                                    </tr>
                                
                                    <tr>
                                        <td class="beschrieb">
                                            <label for="adresszusatz">Adresszusatz</label>							</td>
                                        <td class="input">
                                            <input name="adresszusatz" id="adresszusatz" type="text" size="37">							</td>
                                    </tr>
                                
                                    <tr>
                                        <td class="beschrieb">
                                            <label for="plz">Postleitzahl</label>							</td>
                                        <td class="input">
                                            <input name="plz" id="plz" type="text" size="37">							</td>
                                    </tr>
                                
                                    <tr>
                                        <td class="beschrieb">
                                            <label for="plz">Ort</label>							</td>
                                        <td class="input">
                                            <input name="ort" id="ort" type="text" size="37">							</td>
                                    </tr>
                            
                                    <tr>
                                        <td class="beschrieb">
                                            <label for="tel">Tel</label>							</td>
                                        <td class="input">
                                            <input name="tel" id="tel" type="text" size="37">							</td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="beschrieb">
                                            <label for="email">E-Mail</label>							</td>
                                        <td class="input">
                                            <input name="email" id="email" type="text" size="37">							</td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="beschrieb">							</td>
                                        <td class="label">
                                            <label>
                                            *Wie sind Sie auf uns aufmerksam geworden?</label>							</td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox">							</td>
                                        <td class="textarea">
                                            <textarea name="aufmerksam" rows="5" cols="37"></textarea>							</td>
                                    </tr>
                                    <tr>
                                        <td class="beschrieb">
                                            <label for="jahrgang">*Jahrgang</label>							</td>
                                        <td class="input">
                                            <input name="jahrgang" id="jahrgang" type="text" size="37">							</td>
                                    </tr>
                                    <tr>
                                        <td class="beschrieb">
                                            <label for="taetigkeit">*T&auml;tigkeit</label>							</td>
                                        <td class="input">
                                            <input name="taetigkeit" id="taetigkeit" type="text" size="37">							</td>
                                    </tr>
                                    <tr>
                                        <td class="beschrieb">							</td>
                                        <td class="label">
                                            <label>
                                            *Welches sind f&uuml;r Sie die drei wichtigsten politischen Themen und weshalb?</label>							</td>
                                    </tr>
                                    <tr>
                                        <td class="beschrieb">							</td>
                                        <td class="textarea">
                                            <textarea name="themen" rows="5" cols="37"></textarea>							</td>
                                    </tr>
                                    <tr>
                                        <td class="beschrieb">
                                            <label>Bemerkung</label>							</td>
                                        <td class="textarea">
                                            <textarea name="bemerkung" rows="5" cols="37"></textarea>							</td>
                                    </tr>
                                    <tr>
                                        <td class="beschrieb">							</td>
                                        <td class="input">
                                            <input name="absenden" type="submit" class="submit" value="Senden">
                                            <input type="reset" name="Reset" class="reset" value="L&ouml;schen">							</td>
                                    </tr>
                                </table>
                                </fieldset>
                                </form>
                                    <p><img src="http://www.grunliberale.ch/bilder/alle/platzhalter.gif" alt="" width="1" height="10">*Optionale Felder<br>
                                        Mit diesen Angaben helfen Sie uns, unsere Mitglieder und ihre Anliegen besser kennen zu lernen.</p>
                                    <p></p>
                           
                            </div>
                        </div>
                        <div id="photocolumnwrap">
                            <div id="photocolumn">
                            </div>
                        </div>
                        <div id="leftmenuwrap">
                            <div id="leftmenu">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footerkontakt">
                <div>
                    <?php include "../resources/templates/footerkontakt.php"; ?>
                </div>
            </div>
        </div>
        <?php include "resources/templates/javascript.php"; ?>
    </body>
</html>
