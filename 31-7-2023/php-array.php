<?php
$colors = array('white', 'green', 'red');
foreach ($colors as$value) {
  echo "<li>$value</li>";
  
}
echo"<br>";
$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
echo array_shift($color);
echo"<br>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $value) {
   echo "$key = $value";
   echo "<br>";
}
echo "<br>";
$words =  array("abcd","abc","de","hjjj","g","wer");
$max_len = array_map('strlen', $words);
echo max($max_len);
echo "<br>";
echo min($max_len);
echo "<br>";


ini_set("SMTP", "muradlashorman136@gmail.com");
ini_set("smtp_port", 587);
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("murad.alshorman97@gmail.com","My subject",$msg);
?>