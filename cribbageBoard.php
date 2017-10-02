<?php

function displayBoard($p1, $p2){
    
   echo "<table border = 2>";
       echo "<table border = 1 bgcolor= 'orange'> ";
     
       for($i=0; $i < 7; $i++) {
           echo "<tr>";
             for($j=0; $j < 60; $j++) {
                 
                 if($j == $p1 && $i == 1){// player 1 piece first row1
                    
                     echo "<td bgcolor= 'black'>";
                     echo "_";
                     echo "</td>";
                     
                 }
                else if($j == $p2 && $i == 2){// player 2 piece first row 1
                    
                     echo "<td bgcolor= 'black'>";
                     echo "_";
                     echo "</td>";
                     
                 }
                 
                  else if($j+60 == $p1 && $i == 4){// player 1 piece first row1
                    
                     echo "<td bgcolor= 'black'>";
                     echo "_";
                     echo "</td>";
                     
                 }
                 else if($j+60 == $p2 && $i == 5){// player 2 piece first row 1
                    
                     echo "<td bgcolor= 'black'>";
                     echo "_";
                     echo "</td>";
                     
                 }
                 
                 
                else if($i == 1 || $i == 4) {
                     echo "<td bgcolor= 'blue'>";
                     echo "_";
                     echo "</td>";
                   
                 } 
                else  if($i == 2 || $i == 5) {
                     echo "<td bgcolor= 'red'>";
                      echo ".";
                    echo "</td>";
                 } 
                 
                 else if($i == 0 && $j%5 == 0){
                      echo "<td>";
                    echo $j;
                     echo "</td>";
                 }
                 
                   else if($i == 3 && $j%5 == 0){
                      echo "<td>";
                    echo $j + 60;
                     echo "</td>";
                 }
                 else{
                      echo "<td>";
                    echo ".";
                     echo "</td>";
                 }
             
                
             }
            echo "</tr>";

       }
       echo "</table>";
       return;
}
function addPoints($color, $points){
    echo "Nothing";
}

?>