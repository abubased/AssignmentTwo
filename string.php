<?php
/**
 * an array of strings
 * @var array
 */
$strings = ["Hello", "World", "PHP", "Programming"];
foreach($strings as $string){
  $reverse = strrev($string);
  $vowelCount = 0;
  for($i=0; $i<strlen($string); $i++){
    if(in_array($string[$i],["a","e","i","o","u"])){
      $vowelCount++;
    }
  }
  echo "Original String: {$string}, Vowel Count: {$vowelCount}, Reversed String: {$reverse}<br>";
}
