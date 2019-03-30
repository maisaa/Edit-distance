<?php  

class  Lev { 
 // levenshtein distances algorithm
    public function leve($str1,$str2) {

        //Initialize the first row to 0..n.
        for($i=0;  $i<=strlen($str1);  $i++) 
          {  $d[$i][0] = $i;  }
        
        //Initialize the first column to 0..m.
        for($j=0;  $j<=strlen($str2);  $j++) 
          {  $d[0][$j] = $j; } 
       
          //Examine each character of str1 (i from 1 to n).
          for($i=1;  $i<=strlen($str1);  $i++) {
           // echo '<br>';
              //Examine each character of str2 (j from 1 to m).
              for($j=1;$j<=strlen($str2);$j++) {
                  
                  //If str1[i] equals str2[j], the cost ($c) is 0.
                  //If str1[i] doesn't equal str2[j], the cost ($c) is 1.
                  $c = ($str1[$i-1] == $str2[$j-1])?0:1;
        
                  // echo  "i= ".$i.";  s[$i-1]= ".$str1[$i-1]. ";   j= " . $j." t[$j-1]= ".$str2[$j-1]." ;   c= ".$c." . ";
                  // echo '<br>';

                  //Set cell d[i,j] of the matrix equal to the minimum of:
                  // a. The cell immediately above plus 1: d[i-1,j] + 1.
                  // b. The cell immediately to the left plus 1: d[i,j-1] + 1.
                  // c. The cell diagonally above and to the left plus the cost: d[i-1,j-1] + cost.
                  $d[$i][$j] = min($d[$i-1][$j]+1,$d[$i][$j-1]+1,$d[$i-1][$j-1]+$c);
                  
                  // echo "  min = ".$d[$i][$j];
                  // echo '<br>';
          
              }
              // echo '<br>';
          }
           //After the iteration steps are complete, the distance is found in cell d[n,m]. 
          return '<h1><br><br><br>**************************************************<br>*<br>* Levenshtein distances : '.$d[strlen($str1)][strlen($str2)].
          " operations between ($str1,$str2)<br>*<br>**************************************************<br></h1><form><input type='button' value='Go back!' onclick='history.back()'></form'>"; 
        }
        
}



