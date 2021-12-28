<?php
//include "../db.php";
//include "../razeni/in_razeni.php"; 

$start = microtime(true);



// *******************************************
//     vytvoření souborů se str_replace 


$q0="SHOW COLUMNS FROM preklady";
$iv0=mysqli_query($spojeni,$q0);

while ($r0=mysqli_fetch_array($iv0)) {       
 if ($r0[Field]<>"id") $pole[]=$r0[Field];  // pole s názvy sloupců kromě "id", tzn. zkratky všech jazyků
}




foreach ($pole as &$value1) {
 
 $data="<?php
function preklad_x_$value1(\$co,\$jazyk) { 


\$co=\" \".\$co.\" \";
\$co=str_replace(\"<br />\",\" <br /> \",\$co);
\$co=str_replace(\",\",\" , \",\$co);
\$co=str_replace(\";\",\" ; \",\$co);
\$co=str_replace(\":\",\" : \",\$co);
\$co=str_replace(\"/\",\" / \",\$co);
\$co=str_replace(\"!\",\" ! \",\$co);
\$co=str_replace(\".\",\" . \",\$co);
\$co=str_replace(\"(\",\" ( \",\$co);
\$co=str_replace(\")\",\" ) \",\$co);
\$co=str_replace(\"\n\",\" \",\$co);
\$co=str_replace(\"1 .  \",\"1. \",\$co);  // odstranění nadměrných mezer pro 1. třídu 
\$co=str_replace(\"2 .  \",\"2. \",\$co);  // odstranění nadměrných mezer pro 2. třídu 
 
switch (\$jazyk) {\n";
 
 
 
 foreach ($pole as &$value2) {
  $prekladat = TRUE;
  
  if ($value1==$value2) $prekladat = FALSE;
//  if ($value1=="cs" AND $value2=="sk") $prekladat = FALSE;  // nepřekládat z cs do sk a opačně
//  if ($value1=="sk" AND $value2=="cs") $prekladat = FALSE;
 
                                                     
                                                     
  if ($prekladat) {
  
   $q="SELECT $value1,$value2 FROM preklady";
   $iv=mysqli_query($spojeni,$q);

   //echo mysqli_error($spojeni);   
   
   $data.="// --------------- $value1 -> $value2 ---------------\n";
   $data.="case \"$value2\":\n";

   $predchozi="";
  
   
   while ($r=mysqli_fetch_array($iv)) {
//    $data.= "// $r[0] -> $r[1]\n";    
//   echo "// $r[0] -> $r[1]\n<br />";

    $zapsat=TRUE;
  
    if (strpos($r[0],"$") AND strpos($r[1],"$")) $zapsat = FALSE;  // nepřekládat, jestliže vstup i výstup obsahuje $ (oboje jsou výstupní řetězce pro preg_replace)
    if (substr($r[1],0,2)=="N:")                 $zapsat = FALSE;    //  N:   =>  pouze jednosměrný překlad
    if ($r[0]=="" OR $r[1]=="")                  $zapsat = FALSE;
    if ($r[0]==$predchozi)                       $zapsat = FALSE;

    if ($zapsat) {

     if (substr($r[0],1,1)==":" AND substr($r[1],1,1)<>":" ) {  // pro zápisy typu   P:(.*)(wird zwischen)(.*)(gemeinsam mit)(.*)(geführt)

      $vstup = substr($r[0],2); // odstranění příznaků P: , N:
      $vstup = trim($vstup);
       
      switch (substr($r[0],0,1)) {
       case "P": $data.="\$co=preg_replace(\"$vstup\",\"$r[1]\",\$co);\n";  	break;
       case "N": $data.="\$co=str_ireplace(\" $vstup \",\" $r[1] \",\$co);\n";  	break;   // N: se neuplatní v opačném směru (jednosměrné překlady)
       case "R": $data.="\$co=str_replace(\" $vstup \",\" $r[1] \",\$co);\n";  	break;   // R: použije se str_replace místo str_ireplace
      }
     
     } else {
      
      if (substr($r[1],1,1)<>":") {
       $vstup = $r[0];
       $vstup = trim($vstup);
       $data.="\$co=str_ireplace(\" $vstup \",\" $r[1] \",\$co);\n";
      }
     }
    }
    $predchozi=$r[0];
   }

   $data.="break; \n";  
  
  
  }  
 }



 $data.="}\n


\$co=str_replace(\" , \",\",\",\$co);
\$co=str_replace(\" ; \",\";\",\$co);
\$co=str_replace(\" : \",\":\",\$co);
\$co=str_replace(\" . \",\".\",\$co);
\$co=str_replace(\" ! \",\"!\",\$co);
\$co=str_replace(\" / \",\"/\",\$co);
\$co=str_replace(\" ( \",\"(\",\$co);
\$co=str_replace(\" ) \",\")\",\$co);

\$co=str_replace(\" <br /> \",\"<br />\",\$co);
 
\$co=str_replace(\"  \",\" \",\$co);


return \$co;\n
}\n
?>";

 $soubor = fopen("str_replace_$value1.php", "w");
 fwrite($soubor, $data);
 fclose($soubor);



}







echo round((microtime(true)-$start)*1000, 2);
  
?>