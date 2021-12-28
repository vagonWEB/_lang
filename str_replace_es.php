<?php
function preklad_x_es($co,$jazyk) { 


$co=" ".$co." ";
$co=str_replace("<br />"," <br /> ",$co);
$co=str_replace(","," , ",$co);
$co=str_replace(";"," ; ",$co);
$co=str_replace(":"," : ",$co);
$co=str_replace("/"," / ",$co);
$co=str_replace("!"," ! ",$co);
$co=str_replace("."," . ",$co);
$co=str_replace("("," ( ",$co);
$co=str_replace(")"," ) ",$co);
$co=str_replace("
"," ",$co);
$co=str_replace("1 .  ","1. ",$co);  // odstranění nadměrných mezer pro 1. třídu 
$co=str_replace("2 .  ","2. ",$co);  // odstranění nadměrných mezer pro 2. třídu 
 
switch ($jazyk) {
// --------------- es -> cs ---------------
case "cs":
$co=str_ireplace(" El tren no cumple con los estándares de calidad habituales "," Vlak nesplňuje obvyklý standard pro vlaky ",$co);
$co=str_ireplace(" El control de acceso se cierra "," Přístupová brána k nástupišti se ",$co);
$co=str_ireplace(" minutos antes de la salida del tren "," minuty před odjezdem vlaku uzavírá ",$co);
$co=str_ireplace(" Velocidad máxima del tren "," maximální rychlost vlaku ",$co);
$co=str_ireplace(" en sentido contrario "," v obráceném řazení ",$co);
$co=str_ireplace(" acoplado con el tren "," spojen s vlakem ",$co);
$co=str_ireplace(" acoplado con "," spojen s ",$co);
$co=str_ireplace(" facultativa "," podle potřeby ",$co);
$co=str_ireplace(" Desde la estación de "," ze stanice ",$co);
$co=str_ireplace(" Hasta la estación de "," do stanice ",$co);
$co=str_ireplace(" En tramo "," v úseku ",$co);
$co=str_ireplace(" servicio prestado por la empresa "," servis zajišťuje ",$co);
$co=str_ireplace(" categoría de tren "," kategorie vlaku ",$co);
$co=str_ireplace(" número de tren "," číslo vlaku ",$co);
$co=str_ireplace(" de la serie "," řady ",$co);
$co=str_ireplace(" diario "," denně ",$co);
$co=str_ireplace(" no circula los "," nejede v ",$co);
$co=str_ireplace(" no circula "," nejede ",$co);
$co=str_ireplace(" no circula los "," nejede v ",$co);
$co=str_ireplace(" no circula los "," nejede v ",$co);
$co=str_ireplace(" no circula "," nejede ",$co);
$co=str_ireplace(" no circula los "," nejede v ",$co);
$co=str_ireplace(" circula sólo los "," jede jen v ",$co);
$co=str_ireplace(" circula sólo "," jede jen ",$co);
$co=str_ireplace(" circula los "," jede v ",$co);
$co=str_ireplace(" circula "," jede ",$co);
$co=str_ireplace(" circula sólo los "," jede jen v ",$co);
$co=str_ireplace(" circula sólo "," jede jen ",$co);
$co=str_ireplace(" circula los "," jede v ",$co);
$co=str_ireplace(" circula "," jede ",$co);
$co=str_ireplace(" coche "," vůz ",$co);
$co=str_ireplace(" eventualmente "," případně ",$co);
$co=str_ireplace(" cerrado "," uzamčeno ",$co);
$co=str_ireplace(" en caso contrario "," jinak ",$co);
$co=str_ireplace(" sólo "," jen v ",$co);
$co=str_ireplace(" está "," je ",$co);
$co=str_ireplace(" en "," v ",$co);
$co=str_ireplace(" o "," nebo ",$co);
$co=str_ireplace(" y "," a ",$co);
break; 
// --------------- es -> sk ---------------
case "sk":
$co=str_ireplace(" El tren no cumple con los estándares de calidad habituales "," Vlak nespĺňa štandard vlaku kategórie ",$co);
$co=str_ireplace(" El control de acceso se cierra "," Prístupová brána na nástupisku sa ",$co);
$co=str_ireplace(" minutos antes de la salida del tren "," minút pred odchodom vlaku sa uzatvára ",$co);
$co=str_ireplace(" Velocidad máxima del tren "," maximálna rýchlosť vlaku ",$co);
$co=str_ireplace(" en sentido contrario "," opačne radený vlak ",$co);
$co=str_ireplace(" acoplado con el tren "," spojený s vlakom ",$co);
$co=str_ireplace(" acoplado con "," spojený s ",$co);
$co=str_ireplace(" facultativa "," podľa potreby ",$co);
$co=str_ireplace(" Desde la estación de "," zo stanice ",$co);
$co=str_ireplace(" Hasta la estación de "," do stanice ",$co);
$co=str_ireplace(" En tramo "," v úseku ",$co);
$co=str_ireplace(" servicio prestado por la empresa "," servis zabezpečuje ",$co);
$co=str_ireplace(" categoría de tren "," kategória vlaku ",$co);
$co=str_ireplace(" número de tren "," číslo vlaku ",$co);
$co=str_ireplace(" de la serie "," radu ",$co);
$co=str_ireplace(" diario "," denne ",$co);
$co=str_ireplace(" no circula los "," nejde v ",$co);
$co=str_ireplace(" no circula "," nejde ",$co);
$co=str_ireplace(" no circula los "," nejde v ",$co);
$co=str_ireplace(" no circula los "," nejde v ",$co);
$co=str_ireplace(" no circula "," nejde ",$co);
$co=str_ireplace(" no circula los "," nejde v ",$co);
$co=str_ireplace(" circula sólo los "," ide iba v ",$co);
$co=str_ireplace(" circula sólo "," ide iba ",$co);
$co=str_ireplace(" circula los "," ide v ",$co);
$co=str_ireplace(" circula "," ide ",$co);
$co=str_ireplace(" circula sólo los "," ide iba v ",$co);
$co=str_ireplace(" circula sólo "," ide iba ",$co);
$co=str_ireplace(" circula los "," ide v ",$co);
$co=str_ireplace(" circula "," ide ",$co);
$co=str_ireplace(" coche "," vozeň ",$co);
$co=str_ireplace(" eventualmente "," prípadne ",$co);
$co=str_ireplace(" cerrado "," uzamknuté ",$co);
$co=str_ireplace(" en caso contrario "," inak ",$co);
$co=str_ireplace(" sólo "," len v ",$co);
$co=str_ireplace(" está "," je ",$co);
$co=str_ireplace(" en "," v ",$co);
$co=str_ireplace(" o "," alebo ",$co);
$co=str_ireplace(" y "," a ",$co);
break; 
// --------------- es -> en ---------------
case "en":
$co=str_ireplace(" El tren no cumple con los estándares de calidad habituales "," This train fails to satisfy usual quality standard for trains ",$co);
$co=str_ireplace(" El control de acceso se cierra "," Access gate to the platform will closed ",$co);
$co=str_ireplace(" minutos antes de la salida del tren "," minutes before the train departs ",$co);
$co=str_ireplace(" Velocidad máxima del tren "," maximal speed ",$co);
$co=str_ireplace(" en sentido contrario "," in reverse order ",$co);
$co=str_ireplace(" acoplado con el tren "," coupled with train ",$co);
$co=str_ireplace(" acoplado con "," coupled with ",$co);
$co=str_ireplace(" facultativa "," if needed ",$co);
$co=str_ireplace(" Desde la estación de "," from station ",$co);
$co=str_ireplace(" Hasta la estación de "," to station ",$co);
$co=str_ireplace(" En tramo "," in section ",$co);
$co=str_ireplace(" servicio prestado por la empresa "," service is provided by ",$co);
$co=str_ireplace(" categoría de tren "," train category ",$co);
$co=str_ireplace(" número de tren "," train number ",$co);
$co=str_ireplace(" de la serie "," class ",$co);
$co=str_ireplace(" diario "," daily ",$co);
$co=str_ireplace(" no circula los "," does not run on ",$co);
$co=str_ireplace(" no circula "," does not run ",$co);
$co=str_ireplace(" no circula los "," does not run on ",$co);
$co=str_ireplace(" circula sólo los "," runs only on ",$co);
$co=str_ireplace(" circula sólo "," runs only ",$co);
$co=str_ireplace(" circula los "," runs on ",$co);
$co=str_ireplace(" circula "," runs ",$co);
$co=str_ireplace(" circula sólo los "," runs only on ",$co);
$co=str_ireplace(" circula sólo "," runs only ",$co);
$co=str_ireplace(" circula los "," runs on ",$co);
$co=str_ireplace(" circula "," is running ",$co);
$co=str_ireplace(" coche "," car ",$co);
$co=str_ireplace(" eventualmente "," eventually ",$co);
$co=str_ireplace(" cerrado "," closed ",$co);
$co=str_ireplace(" en caso contrario "," else ",$co);
$co=str_ireplace(" sólo "," only on ",$co);
$co=str_ireplace(" está "," is ",$co);
$co=str_ireplace(" en "," in ",$co);
$co=str_ireplace(" o "," or ",$co);
$co=str_ireplace(" y "," and ",$co);
break; 
// --------------- es -> de ---------------
case "de":
$co=str_ireplace(" El tren no cumple con los estándares de calidad habituales "," Dieser Zug bietet nicht die gewohnte Qualität ",$co);
$co=str_ireplace(" El control de acceso se cierra "," Zugang zum Bahnsteig wird ",$co);
$co=str_ireplace(" minutos antes de la salida del tren "," Minuten vor Abfahrt des Zuges geschlossen ",$co);
$co=str_ireplace(" Velocidad máxima del tren "," Maximale Geschwindigkeit ",$co);
$co=str_ireplace(" en sentido contrario "," in umgekehrter Reihung ",$co);
$co=str_ireplace(" acoplado con el tren "," gekuppelt mit dem Zug ",$co);
$co=str_ireplace(" acoplado con "," gekuppelt mit ",$co);
$co=str_ireplace(" facultativa "," nach Bedarf ",$co);
$co=str_ireplace(" Desde la estación de "," ab Station ",$co);
$co=str_ireplace(" Hasta la estación de "," bis Station ",$co);
$co=str_ireplace(" En tramo "," im Abschnitt ",$co);
$co=str_ireplace(" servicio prestado por la empresa "," Fahrgastbedienung ",$co);
$co=str_ireplace(" categoría de tren "," Zugkategorie ",$co);
$co=str_ireplace(" número de tren "," Zugnummer ",$co);
$co=str_ireplace(" de la serie "," Reihe ",$co);
$co=str_ireplace(" diario "," täglich ",$co);
$co=str_ireplace(" no circula los "," fährt nicht am ",$co);
$co=str_ireplace(" no circula "," fährt nicht ",$co);
$co=str_ireplace(" no circula los "," nicht am ",$co);
$co=str_ireplace(" no circula los "," fährt nicht am ",$co);
$co=str_ireplace(" no circula "," fährt nicht ",$co);
$co=str_ireplace(" no circula los "," fährt nicht am ",$co);
$co=str_ireplace(" circula sólo los "," fährt nur am ",$co);
$co=str_ireplace(" circula sólo "," fährt nur ",$co);
$co=str_ireplace(" circula los "," fährt am ",$co);
$co=str_ireplace(" circula "," fährt ",$co);
$co=str_ireplace(" circula sólo los "," fährt nur am ",$co);
$co=str_ireplace(" circula sólo "," fährt nur ",$co);
$co=str_ireplace(" circula los "," fährt am ",$co);
$co=str_ireplace(" circula "," fährt ",$co);
$co=str_ireplace(" coche "," Wagen ",$co);
$co=str_ireplace(" eventualmente "," bzw ",$co);
$co=str_ireplace(" cerrado "," zugesperrt ",$co);
$co=str_ireplace(" en caso contrario "," anders ",$co);
$co=str_ireplace(" sólo "," nur an ",$co);
$co=str_ireplace(" está "," ist ",$co);
$co=str_ireplace(" en "," in ",$co);
$co=str_ireplace(" o "," oder ",$co);
$co=str_ireplace(" y "," und ",$co);
break; 
// --------------- es -> pl ---------------
case "pl":
$co=str_ireplace(" El tren no cumple con los estándares de calidad habituales "," Ten pociąg nie spełnia standardowej normy jakości dla tego zestawienia ",$co);
$co=str_ireplace(" El control de acceso se cierra "," Bramki dostępu na peronie są zamykane ",$co);
$co=str_ireplace(" minutos antes de la salida del tren "," minuty przed odjazdem pociągu ",$co);
$co=str_ireplace(" Velocidad máxima del tren "," Maksymalna prędkość pociągu ",$co);
$co=str_ireplace(" en sentido contrario "," w odwróconym zestawieniu ",$co);
$co=str_ireplace(" acoplado con el tren "," połączony z pociągiem ",$co);
$co=str_ireplace(" acoplado con "," połączony z ",$co);
$co=str_ireplace(" facultativa "," na zarządzenie ",$co);
$co=str_ireplace(" Desde la estación de "," ze stacji ",$co);
$co=str_ireplace(" Hasta la estación de "," do stacji ",$co);
$co=str_ireplace(" En tramo "," na odcinku ",$co);
$co=str_ireplace(" servicio prestado por la empresa "," obsługę zapewnia ",$co);
$co=str_ireplace(" categoría de tren "," kategoria pociągu ",$co);
$co=str_ireplace(" número de tren "," numer pociągu ",$co);
$co=str_ireplace(" de la serie "," seria ",$co);
$co=str_ireplace(" diario "," codziennie ",$co);
$co=str_ireplace(" no circula los "," nie kursuje w ",$co);
$co=str_ireplace(" no circula "," nie kursuje ",$co);
$co=str_ireplace(" no circula los "," nie jedzie w ",$co);
$co=str_ireplace(" no circula los "," nie jedzie w ",$co);
$co=str_ireplace(" no circula "," nie jeździ ",$co);
$co=str_ireplace(" no circula los "," nie jedzie w ",$co);
$co=str_ireplace(" circula sólo los "," kursuje tylko w ",$co);
$co=str_ireplace(" circula sólo "," kursuje tylko ",$co);
$co=str_ireplace(" circula los "," kursuje w ",$co);
$co=str_ireplace(" circula "," kursuje ",$co);
$co=str_ireplace(" circula sólo los "," jedzie tylko w ",$co);
$co=str_ireplace(" circula sólo "," jedzie tylko ",$co);
$co=str_ireplace(" circula los "," jedzie w ",$co);
$co=str_ireplace(" circula "," jedzie ",$co);
$co=str_ireplace(" coche "," wagon ",$co);
$co=str_ireplace(" eventualmente "," ostatecznie ",$co);
$co=str_ireplace(" cerrado "," niedostępne dla podróżnych ",$co);
$co=str_ireplace(" en caso contrario "," w pozostałe dni ",$co);
$co=str_ireplace(" sólo "," tylko w ",$co);
$co=str_ireplace(" está "," jest ",$co);
$co=str_ireplace(" en "," w ",$co);
$co=str_ireplace(" o "," lub ",$co);
$co=str_ireplace(" y "," i ",$co);
break; 
// --------------- es -> hu ---------------
case "hu":
$co=str_ireplace(" en sentido contrario "," szakaszon fordított sorrendben közlekedik ",$co);
$co=str_ireplace(" facultativa "," szükség esetén ",$co);
$co=str_ireplace(" Desde la estación de "," állomásig ",$co);
$co=str_ireplace(" Hasta la estación de "," állomáson át ",$co);
$co=str_ireplace(" En tramo "," szakaszon ",$co);
$co=str_ireplace(" servicio prestado por la empresa "," fedélzeti szolgáltató: ",$co);
$co=str_ireplace(" categoría de tren "," vonatnem ",$co);
$co=str_ireplace(" de la serie "," kocsiosztály ",$co);
$co=str_ireplace(" diario "," naponta ",$co);
$co=str_ireplace(" no circula los "," nem közlekedik ",$co);
$co=str_ireplace(" no circula "," nem közlekedik ",$co);
$co=str_ireplace(" no circula los "," nem közlekedik ",$co);
$co=str_ireplace(" no circula los "," nem közlekedik ",$co);
$co=str_ireplace(" no circula "," nem közlekedik ",$co);
$co=str_ireplace(" no circula los "," nem közlekedik ",$co);
$co=str_ireplace(" circula sólo los "," közlekedik: ",$co);
$co=str_ireplace(" circula sólo "," közlekedik: ",$co);
$co=str_ireplace(" circula los "," közlekedik: ",$co);
$co=str_ireplace(" circula "," közlekedik ",$co);
$co=str_ireplace(" circula sólo los "," közlekedik ",$co);
$co=str_ireplace(" circula sólo "," közlekedik ",$co);
$co=str_ireplace(" circula los "," közlekedik ",$co);
$co=str_ireplace(" coche "," kocsi ",$co);
$co=str_ireplace(" cerrado "," lezárva ",$co);
$co=str_ireplace(" y "," és ",$co);
break; 
}



$co=str_replace(" , ",",",$co);
$co=str_replace(" ; ",";",$co);
$co=str_replace(" : ",":",$co);
$co=str_replace(" . ",".",$co);
$co=str_replace(" ! ","!",$co);
$co=str_replace(" / ","/",$co);
$co=str_replace(" ( ","(",$co);
$co=str_replace(" ) ",")",$co);

$co=str_replace(" <br /> ","<br />",$co);
 
$co=str_replace("  "," ",$co);


return $co;

}

?>