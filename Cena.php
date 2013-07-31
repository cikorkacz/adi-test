<?php 
     
class cena {
    function format($cena, $mena="", $typ="") 
    {
     
      if ($typ == "") $typ="za nemovitost";
      if ($mena == "") {$mena = 'Kč'; }
      if ($cena > 0) {
         $vystup = number_format($cena, 0, '', ' ')
         if ($mena != "") { $vystup .= ' '.$mena; }
         if ($typ != "") { $vystup .= ' '.$typ; }
      } else {
         $vystup = 'na dotaz';
      }
	  
      return $vystup;
   
   }
	     
}
 	  
   
?>
 
 	
   
     