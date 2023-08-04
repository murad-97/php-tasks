<?php
$total = 0;
for ($i=1; $i <=30 ; $i++) { 
   $total +=$i;
}
echo $total;
echo"<br>";
for ($i=1; $i <=5 ; $i++) {
   for ($j=1; $j <=5 ; $j++) { 
    if ($i == $j) {
        echo $j;
    }else{
        echo 0;
    }
   }
echo "<br>";
}
$number = 5;
$factorial = 1;
for ($i=1; $i <= $number; $i++) { 
   $factorial = $factorial*$i;
}
echo $factorial;
echo "<br>";
$n1=1; 
$n2=0;
for($i=0;$i<=15;$i++){
echo " $n2,";
$temp=$n1+$n2;
$n1=$n2;  
$n2=$temp; 	
}
echo "<br>";
$n = 5;
  $count = 1;
   for ($i = $n; $i > 0; $i--) {
     for ($j = $i; $j < $n + 1; $j++) {
         echo $count;
          $count++;
          } echo "<br>";
           } 
