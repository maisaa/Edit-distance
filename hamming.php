<?php
class hamDes{

    public function ham($s1, $s2){
        $count=0;
        //Ensure the two strings are of equal length
        if( strlen($s1) !== strlen($s2)){
           return "<h1><br><br><br>**************************************************<br>*<br>*($s1, $s2)  not the same length<br>*<br>**************************************************<br></h1><form><input type='button' value='Go back!' onclick='history.back()'></form'>";
      
          }else{ 
            //Compare each element between str1 & str2 
            for ($i=0; $i<strlen($s1); $i++){
                 if($s1[$i] != $s2[$i])
                    $count++; 
                    //echo  "s1[$i] = ".$s1[$i]." &&  s2[$i] = ".$s2[$i]." &&  count = ". $count."<br>";       
              
          }
                 }
          return  "<h1><br><br><br>**************************************************<br>*<br>* Hamming distances : $count between ($s1, $s2)<br>*<br>**************************************************<br></h1><form><input type='button' value='Go back!' onclick='history.back()'></form'>";
    }

}

