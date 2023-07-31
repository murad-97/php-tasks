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


