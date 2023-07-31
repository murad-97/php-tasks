<?php 

$year = 2019;
if ($year % 400 == 0) {
   echo $year." is a leap year.";
} elseif ($year % 100 == 0) {
   echo $year." is not a leap year.";
} elseif ($year % 4 == 0) {
   echo $year." is a leap year.";
} else {
   echo $year." is not a leap year.";
}
echo "<br>";
$temp = 27;
if ($temp>20) {
    echo "It is summertime!";
}else{
    echo "It is wintertime!";
}
echo"<br>";
$sample = array("firstInteger"=>3 , "secondInteger"=>2);

if ($sample["firstInteger"]===$sample["secondInteger"]) {
    
    echo ($sample["firstInteger"]+ $sample["secondInteger"])*3;
    
}else{
    
    echo ($sample["firstInteger"]+ $sample["secondInteger"]);
    
}
echo"<br>";
$sample = array("firstInteger"=>3 , "secondInteger"=>2);

if ($sample["firstInteger"]+$sample["secondInteger"]===30) {
    
    echo "true";
    
}else{
    
    echo "false";
    
}
echo"<br>";
$number = 50;

if (abs($number)%3===0) {
    
    echo "true";
    
}else{
    
    echo "false";
    
}
echo"<br>";
$number = 30;

if ($number<50 && $number>20) {
    
    echo "true";
    
}else{
    
    echo "false";
    
}
echo"<br>";
$arr = array(1,6,-9,5);
sort($arr);
echo array_pop($arr);
echo"<br>";
$variable = 180;
switch (true) {
    case $variable<=50:
        echo $variable*2.5;
        break;
    case $variable<=150:
        $sum = ($variable-50);
        echo ($sum*5)+(50*2.5);
        break;
    case $variable<=250:
        $sum = ($variable-150);
        echo ($sum*6.20)+(100*5)+(50*2.5);
        
        break;
        default:
        $sum = ($variable-250);
        echo ($sum*7.5)+(100*6.20)+(100*5)+(50*2.5);
        
        break;
}

echo"<br>";
$num1 = 10;
$num2 = 10;
$sign = "/";
switch (true) {
    case $sign == "+":
       echo $num1 +$num2;
        break;
    case $sign == "-":
       echo $num1 -$num2;
        break;
    case $sign == "*":
       echo $num1 *$num2;
        break;
    case $sign == "/":
       echo $num1 /$num2;
        break;

}
echo"<br>";



?>
