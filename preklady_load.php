<?php
include "../db.php";
//include "../razeni/in_razeni.php"; 


$start = microtime(true);

 $pocitadlo=0;

 $file=fopen("preklady.csv",r);
 if ($file) {

  $q="DELETE FROM preklady";
 $iv2=mysqli_query($spojeni,$q);
// echo($q."<BR>\n");
   if (mysqli_error($spojeni)) {
    echo("<b>Error SQL ".mysqli_errno().": ".mysqli_error($spojeni)."</b><BR><BR>\n"); }



  $poleradku=file("preklady.csv");

  $pocetradku=count($poleradku);

  for ($i=1; $i<=$pocetradku; $i++) {
   $radek=explode(";",$poleradku[$i-1]);

   if ($radek[1]<>"") {
     $pocetpol=count($radek);
     $pocitadlo++;
  
     $q="INSERT INTO preklady VALUES ($i, ";
  
     for ($j=1; $j<$pocetpol; $j++) {
      $polozka=trim($radek[$j]);
  //    $polozka=str_replace('"','',$polozka); //náhrada uvozovky (zejm. v popisku) znakem ^
  //    $polozka=str_replace('()','0',$polozka); //náhrada závorek za nulu (pro řady vozů začínající nulou)
  //    $polozka=str_replace('%','0',$polozka); //náhrada procenta nulou (pro řady vozů začínající nulou)
      $q=$q."\"".$polozka."\"";
      if ($j+1<$pocetpol) { $q=$q.","; }
     }
     $q=$q.");";
     $iv=mysqli_query($spojeni,$q);
//     echo($radek[1]." ");
     if (mysqli_error($spojeni)) {
      echo("<b>Error SQL ".mysqli_errno($spojeni).": ".mysqli_error($spojeni)."</b><BR><BR>\n"); }
    }
  }
    
  echo "\n<br>Vlozeno $pocitadlo radku.";
 } else {
  echo "Soubor preklady.csv nenalezen";
 }







include "preklady_cron.php";




echo "<br />--------<br />".round((microtime(true)-$start)*1000, 2);
  
?>