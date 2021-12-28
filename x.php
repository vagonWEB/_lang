<?php
include "../db.php";
//include "../razeni/in_razeni.php"; 

$start = microtime(true);

$q="SELECT DISTINCT vozy FROM razeni_vlaky2018";
$iv=mysqli_query($spojeni,$q);

echo "<html><head><meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\"></head><body>";

while ($r=mysqli_fetch_array($iv)) {       
  $vozy=explode("+",$r[vozy]); 
  $pocvozy=count($vozy);
  
  for ($j=0; $j<$pocvozy; $j++) { // cyklus po jednotlivych vozech
   if ($vozy[$j]<>"") {
     
     $vagon=explode("*",$vozy[$j]); // rozdeleni na udaje jednotlivych vozu
     if ($vagon[3]<>"") echo "\"$vagon[3]\";<br>\n";
     if ($vagon[4]<>"" AND $vagon[4]<>"-") echo "\"$vagon[4]\";<br>\n";
     if ($vagon[5]<>"" AND $vagon[5]<>"-") echo "\"$vagon[5]\";<br>\n";
   }
  }


}







echo round((microtime(true)-$start)*1000, 2);

echo "</body></html>";
  
?>