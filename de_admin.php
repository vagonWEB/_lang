<?php

define ("Prihlaseni","Anmeldung");
define ("PrihlasovaciJmeno","Anmeldungsname");
define ("Heslo","Passwort");
define ("Prihlasit","Anmelden");
define ("JstePrihlasenJako","You are logged in as");
define ("RegistrovanyUzivatel","Registrierter Nutzer");
define ("ChybneJmenoNeboHeslo","Wrong name or password");


define ("RegistraceNovehoUzivatele","Neuen Benutzer anmelden");
define ("Info_PrihlasovaciJmeno","Mit diesem Anmeldungsnamen Sie melden in der Administration an.");
define ("UzivatelskeJmeno","Benutzername");
define ("Info_UzivatelskeJmeno","Benutzername wird unter jedem Zug, das wird sich ändern, aufgeführt werden. Es kann der gleiche wie der Anmeldungsmame sein.");
define ("Email","Öffentliche E-mail");
define ("Info_Email","Diese E-Mail wird in der Form etwas(at)etwas(dot)com neben Ihrem Benutzernamen aufgelistet werden. Wenn Sie keine E-Mail offenbart, dieses Feld leer.");
define ("Kontaktni_Email","E-mail für Kontakt");
define ("Info_Kontaktni_Email","Ihre E-Mail, mit der wir Sie erreichen werden. Diese E-Mail wird nicht veröffentlicht, sondern nur zur Kommunikation mit Ihnen verwendet.");
define ("Zaregistrovat","Registrieren");
define ("UspesnaRegistrace","Sie haben sich erfolgreich mit den folgenden Informationen registriert");
define ("InfoRegistrace3","Now you can login on <a href='https://www.vagonweb.cz/admin/'>www.vagonweb.cz/admin/</a>.");
define ("ChybiPovinneUdaje","Fehlende erforderlichen Daten");
define ("JmenoJizExistuje","Anmeldunsname existiert bereits");
define ("ZvolteProsimJineJmeno","Please choose another name");

define ("NepodariloSeAutorizovat","Falsch Autorisation");
define ("NepovolenyPristup","Unauthorized access");

define ("PridatNovyVlak","Hinzufügen neuen Zug");
define ("VlozitNovyVlakJako","Add new train as");
define ("Aktualizovat","Update");
//define ("ZtraceneVlaky","Lost Züge");
define ("UlozitNovy","Speichern neue");
define ("UlozitZmeny","Speichern Änderungen");
define ("SmazatVlak","Zug löschen");

define ("ChybaPriUkladani","Fehler beim Speichern");
define ("NovyVlakUspesneUlozen","Der neue Zug wurde erfolgreich gespeichert");
define ("ZmenaUspesneUlozena","Änderungen wurden erfolgreich gespeichert");
define ("VlakUspesneSmazan","Zug erfolgreich gelöscht");
define ("ChybaPriMazaniVlaku","Fehler beim Zug löschen");
define ("NovyVlak","Neuen Zug");
define ("NeplatnePrihlaseni","Ungültige Login");
define ("ZnovuPrihlasit","Anmeldung wieder");



define ("NemateZadneVlaky","No train found (or no train with a single category without slash).");
define ("ChybiNektereVlaky","Missing some trains?");
define ("ChybiNektereVlaky_napoveda","Only trains with a unique category (ie. trains that do not have multiple category separated by a slash) are selected to generate this menu.<br />
For example, if you create some EC/IC trains and no other, neither EC nor IC category will be created here. A link is created when at least one train is saved with
separate category EC or IC. Alternatively, to create a link in this menu you can save a fictitious train of the given category (EC or IC), which will not be public.");

define ("NovyClanek","New article");
define ("VlozitNovyClanek","Add new article");
define ("NovyClanekUspesneUlozen","New article saved successfully");

define ("Clanek_nadnadpis","Subtitle I");
define ("Clanek_nazev","Article title");
define ("Clanek_podnadpis","Subtitle II");
define ("Clanek_uvod_obr","Title image");
define ("Clanek_uvod","Introductory paragraph");
define ("KlicovaSlova","Keywords");
define ("PovolitKomentare","Allow comments");
define ("TrvaleVerejnyNahled","Permanently public preview");
define ("h_TrvaleVerejnyNahled","Anyone with this link can view the article even if the article is not published. Useful for sharing an article before publishing it.");
define ("SablonaProVlozeniOdkazuRazeni","Template for inserting a link into a train composition");
define ("SablonaProVlozeniOdkazuRazeni_kod","[link year carrier category number name]");
define ("SablonaProVlozeniCelehoVlaku","Template for inserting the whole train");
define ("SablonaProVlozeniCelehoVlaku_kod","[razeni year id]");
define ("SeznamObrazku","list of images");
define ("Puvodni_autor","Original author");
define ("h_Puvodni_autor","If you are writing an article from another author, enter his name here. Otherwise, leave blank. ");


define ("Nezpracovano","Not processed");
define ("Jen_skutecne","There is only a real composition(s)");

define ("UlozitNovy","Save new train");
define ("UlozitZmeny","Save");
define ("Klonovat","Clone");
define ("h_Klonovat","Create a new copy of this train");
define ("h_Klonovat1","Create a new copy of this train, train number will be INCREASED by 2 and timestamps in the route will be increased by one hour");
define ("h_Klonovat2","Create a new copy of this train, train number will be INCREASED by 2 and timestamps in the route will be increased by two hours");
define ("h_Klonovat3","Create a new copy of this train, train number will be REDUCED by 2 and timestamps in the route will be increased by one hour");
define ("h_Klonovat4","Create a new copy of this train, train number will be REDUCED by 2 and timestamps in the route will be increased by two hours");
define ("Obratit","Reverse");
define ("h_Obratit","Create a new reversed copy of this train");
define ("Zamitnout","Reject");
define ("h_Zamitnout","Reject this train");
define ("Schvalit","Approve and publish");
define ("h_Schvalit","Approve and publish this train");
define ("SmazatVlak","Delete this train");
define ("OpravduChceteSmazatVlak","Do you really want to delete the train");
define ("ChybaPriUkladani","Error");
define ("NovyVlakUspesneUlozen","The new train successfully saved");
define ("TakeUlozenyTytoDalsiVlaky","Also saved these additional trains");
define ("ZmenaUspesneUlozena","Change successfully saved");
define ("VlakUspesneSmazan","The train successfully deleted");
define ("ChybaPriMazaniVlaku","Error");
define ("NovyVlak","New train");
define ("NovyObracenyVlak","New reversed train");
define ("NeplatnePrihlaseni","Invalid login (maybe you have been automatically logged off)");
define ("ZnovuPrihlasit","Again login");
define ("NeniVyplnenoPole","Field is missing: ");
define ("JizExistujeVlak","There is already a train of the same parameters");
define ("ExistujeVlakSOdDo","There is another variant of this train which \"From\" and \"To\" date are overlapping");
define ("TrasaObsahujeCislo1","The vehicle number (EVN)");
define ("TrasaObsahujeCislo2","must be between 3<sup>rd</sup> and 4<sup>th</sup> star or between 4<sup>th</sup> and 5<sup>th</sup> star (the fifth star can be write manually)");

define ("NemateNastavenJazyk","You have not set the default language for composition.");
define ("MuzeteSiJejNastavit","You can set it in <a class=odkaz2 target=_blank href=nastaveni_predvolby_razeni.php>Preferences for composition</a> section.");
define ("NeniVyplnenoCisloProSerazeniVlaku","The Sorting number is not filled in");
define ("MeloByBytShodneSCislemVlaku","This sorting number should be the same as one of the train numbers");
define ("OdkazProEditaci","Permanent edit link");

define ("Zobrazit","Show");
define ("JenMoje","My only");
define ("Detailne","Detailed view");
define ("Natery","Liveries");
define ("Vychozi","default");
define ("Vozy","cars");
define ("h_JeVerejny","This train is public, click for cancel of public display");
define ("h_NeniVerejny","This train is not public, click for make public");
define ("ZobrazitMeKategorie","Show my trains");
define ("ZobrazitVsechnyRoky","Show all years");


define ("h_Hledat","You can enter the train number, train name (or initial part of a name), rail company, train category or a combination of rail company and category (eg. ČD EC)");
define ("h_CSV_export_vyber","Download a CSV file with currently listed trains (all pages, but only own trains)");

define ("Zeleznice","Railway");
define ("h_Zeleznice","Shortcut of Railway company");
define ("Cislo","Number");
define ("h_Cislo","Train number");
define ("Cislo_strucne","Simply ident.");
define ("h_Cislo_strucne","Simplified train identification (optional)");
define ("Cislo_alias","Alias");
define ("h_Cislo_alias","Numbers for composing the \"virtual trains\" (optional)");
define ("Druh","Category");
define ("h_Druh","Train category");
define ("Nazev","Name");
define ("h_Nazev","Train name");
define ("Serazeni","Sorting");
define ("h_Serazeni","Sorting number (to be filled only for trains that have more numbers; for other trains this number is identical to the train number and it is automatically added).");
define ("Varianty","Variant");
define ("h_Varianty","The order for show train variants on the page.");
define ("Relace","Relation");
define ("h_Relace","(in 2012 and 2013 only for ČD and RENFE)");
define ("Trat","Route Nr.");
define ("h_Trat","Track number(s) according to the timetable and possibly also line number(s).
Example: A-141,CZ-196,OÖVV-S3");
define ("Trasa","Route");
define ("h_Trasa","Route of train");
define ("Zobrazit_trasu","Show route always");
define ("h_Zobrazit_trasu","If checked the route will be show always directly in train variant");
define ("Varianta","Variant");
define ("h_Varianta","Designation of this train variant (do not fill out if only one train variant is created)");
//define ("h_Platnost","To create more variants train with different validity (if you can not use fields From / To for define validity)");
define ("Pl_Od","From");
define ("Pl_Do","To");
define ("h_Od","Validity \"From\" in form dd.mm.yyyy (for night train you enter the first date of departure from the starting station)");
define ("h_Do","Validity \"To\" in form dd.mm.yyyy (for night train you enter the last date of departure from the starting station)");
define ("Datum","Datum");
define ("h_Datum","Für tatsächliche Reihungen: Datum im Format TT.MM.JJJJ (bei Nachtzügen das Datum der Abfahrt am Zug-Ausgangsbahnhof, und die Anzahl der Nächte, die der Zug fährt)");
define ("Nocni","Nächte");
define ("h_Nocni","Nur für Nachtzüge: Anzahl der Nächte, die der Zug fährt");
define ("h_Prevratit","Reverse the order");
define ("h_NacistTrasu","Load route from database (some railways only)");
define ("h_PosunCasu","Time shift");
define ("h_PosunData","Datum ändern");
define ("DataNebylaNalezena","Data not found");
define ("NavrhyVlaku","Click the line to fill in the form with data of this train");

define ("Usek","Abschnitt");
define ("h_Usek","section of the route for which this composition applies (do not fill out if a train is created for the whole route)");
define ("h_Usek_skut","Bahnhof oder Abschnitt, wo der Zug gesichtet wurde (nicht ausfüllen, wenn eine Reihung für die gesamte Strecke eines Zuges erstellt wird)");
define ("VcetneTras","CR");
define ("PouzeVozy","C");
define ("BezLoko","-1");
define ("h_Prevratit_itrasy","Reverse the order of <b>all</b> Cars, also reverse the Route for each car (if specified)");
define ("h_Prevratit_bezlokoitrasy","Reverse the order of Cars <b>excepting first car</b> (usually a locomotive), also reverse the Route for each car (if specified)");
define ("h_Prevratit_jenvozy","Reverse the order of <b>all</b> cars, route keep");
define ("h_Prevratit_bezlokojenvozy","Reverse the order of Cars <b>excepting first car</b> (usually a locomotive), route keep");
define ("Omezeni_platnosti","Restrictions<br />of validity");
define ("Poznamka","Note");
define ("h_Poznamka","");
define ("ZdrojPro","Source for");
define ("h_ZdrojPro","");
define ("ZdrojZ","Source from");
define ("h_ZdrojZ","");
define ("PosledniZmena","Last update");
define ("PoslZmena","Last update");
define ("Bylo","Been");
define ("Spravce","Admin");
define ("Supervizor","Supervisor");
define ("Upravil","Edited by");

define ("Zverejnit","Sichtbar");
define ("h_Zverejnit","Wenn nicht ausgewählt, wird der Zug nicht öffentlich sichtbar sein");
define ("VlakBudeZverejnenPoSchvaleni"," Der Zug wird nach Freigabe veröffentlicht ");
define ("h_JmenoNick","Name oder Nickname");
define ("Pokyny","Anleitung");
define ("Napoveda","Hilfe");
define ("Preklady","Übersetzungen");
define ("PozorNocniVlak","<span style=color:red;>Achtung! Wahrscheinlich handelt es sich um einen Nachtzug.<br>
Bitte das Datum der Abfahrt am Zug-Ausgangsbahnhof ausfüllen, und die Anzahl der Nächte, die der Zug fährt.</span><br>Wenn dies kein Nachtzug ist, ignorieren Sie bitte diese Meldung.");
define ("Povinne","Erforderliche");
define ("Nepovinne","Optional");
define ("Polozky","Felder");
define ("Zobrazit_historii","Show history");
define ("Obsah","Content");
define ("Akce","Action");

define ("Poznamka_k_vlaku","Anmerkung");
define ("Vzkaz","Hinweis oder Nachricht für Admins");
define ("Muze_byt_zverejneno","kann veröffentlicht werden");
define ("Nebude_zverejneno","wird nicht veröffentlicht");

define ("JizExistujeVlakDatum","There is another train with date");
define ("DatumVBudoucnosti","Future date");
define ("VlakZamitnut","Train rejected");
define ("VlozenoDrive","This train was added earlier than is the date of real composition");
define ("DatumVlaku","Date journey");
define ("JeMimoPlatnostGVD","is out of validity this timetable");
define ("VlozenoVDenPlatnosti","Added in the same day");
define ("ZkopirovatTentoVlakDoRoku","Copy this train to year");
define ("NastaveniKopirovacihoTlacitka","Setting of the copy button");
define ("OdVetsiNezDo","The date \"From\" is after the date \"To\"");
define ("UVlaku","At train");
define ("Zmeneno","changed");
define ("VlakBudeSlozenZTechtoCasti","This virtual train is composed of the following parts");
define ("NeodkazujeNaZadnyVlaky","This virtual train doesn't yet contain any parts");


define ("VlozitNovyZaznam","Add new record");
define ("Ulozit","Save");
define ("Smazat","Delete");
define ("Nyni","Now");

define ("Spravci","For supervisors");
define ("SeznamRadicu","List of makers");
define ("Nastaveni","Settings");
define ("ZmenaHesla","Reset password");
define ("StareHeslo","Current password");
define ("NoveHeslo","New password");
define ("NoveHeslo2","Re-enter new password");
define ("NespravneUdaje","Incorrect data");
define ("Zpet","Back");
define ("Zavrit","Close");

define ("Upravit","Edit");
define ("Archiv","Archive");
define ("PresunoutDoArchivu","Move message to Archive");
define ("OpravduChcetePresunoutDoArchivuZpravu","Do you want to move to Archive this message: ");
define ("Od","From");
define ("Zprava","Message");
define ("Zpravy","Messages");
define ("PrichoziZpravy","Incoming messages");
define ("OdchoziZpravy","Sent messages");
define ("NeschvaleneSkutecneRazeni","Real compositions pending approval");
define ("StarsiNeschvaleneSkutecneRazeni","Real compositions pending approval (previous years)");
define ("NeschvalenePlanovaneRazeni","Scheduled compositions pending approval");
define ("StarsiNeschvalenePlanovaneRazeni","Scheduled compositions pending approval (previous years)");


define ("ZasilaniChyb","Message forwarding");
define ("EmailProZasilaniChyb","E-mail for message forwarding");


define ("Predvolby_razeni","Preferences for composition");
define ("Predvolba","Preset");
define ("Predvolby","Preferences");
define ("PredvolbyDatum","Presets for validity");
define ("PredvolbyPro","Presets for");
define ("PevneDleRoku","Fixed validity according selected year");
define ("Jazyk","Sprache");
define ("ZvolteJazyk","Wenn Sie Anmerkungen hinzufügen, wählen Sie hier Ihre Sprache aus. Diese Option dient zur Verbesserung der Übersetzung.");

define ("VyberteSoubor","Select a file");
define ("Nahrat","Load");
define ("SouborJePrilisVelky","The file is too large");
define ("NebylNalezenVlakSCislem","Not found our train with number");
define ("Aid","and with ID");
define ("VlakBylVlozenJakoNovy","This train was inserted as new train");
define ("Zmena","changed");
define ("BezeZmeny","not changed");
define ("ChybnaZnakovaSada","Bad character set (must be UTF-8) - train not saved");

define ("NajitNahradit","Find and replace");
define ("NajitCo","Find what");
define ("NahraditCim","Replace with");
define ("Kde","Where");
define ("Nahradit","Replace");
define ("PoZmene","after change");

define ("KontrolaVlaku","Checking of real compositions");
define ("ReferencniTabulkaEVN","EVN reference table");







/* 
define ("Zeleznice","Železnice");
define ("h_Zeleznice","zkratka dopravce (pokud již je tento vlak dostupný v systému, stačí zadat u mezinárodních vlaků jednu zkratku, ostatní budou doplněny automaticky)");
define ("Cislo","Číslo");
define ("h_Cislo","číslo vlaku");
define ("Druh","Druh");
define ("h_Druh","kategorie vlaku");
define ("Nazev","Jméno");
define ("h_Nazev","jméno vlaku");
define ("Trasa","Trasa");
define ("h_Trasa","trasa vlaku");
define ("Datum","Datum");
define ("h_Datum","datum jízdy vlaku ve tvaru RRRR-MM-DD (POZOR: u nočních vlaků zadejte datum odjezdu z výchozí stanice a počet nocí, po kterých vlak jede)");
define ("Nocni","Nocí");
define ("h_Nocni","u nočních vlaků zadejte počet nocí, po kterých vlak jede");
define ("Usek","Stanice");
define ("h_Usek","stanice nebo úsek, pro který platí Vaše řazení (není nutno uvádět u těch vlaků, u kterých nemůže dojít k mýlce)");
define ("Poznamka","Poznámka");
define ("h_Poznamka","");
define ("Zmena","Poslední změna");
define ("h_Zmena","");
define ("Zverejnit","Zveřejnit");
define ("PozorNocniVlak","<span style=color:red;>Pozor! Pravděpodobně se jedná o noční vlak.<br>
Jako Datum vyplňte datum odjezdu z výchozí stanice vlaku a správný počet nocí.</span><br>
Pokud se nejdená o noční vlak, tuto zprávu ignorujte.");
*/



include "en_admin.php";

?>
