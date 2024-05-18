<?php

$string = ["Hello","World","PHP","Programming"];

$firstStr = array_shift($string);
$secondStr = array_shift($string);
$thirdStr = array_shift($string);
$fourthStr = array_shift($string);



//function for First string;
function firstStr($str){

   $reversedStr = strrev($str);
   $vowel = ['a','e','i','o','u'];
   $countVowel = 0;
   $lengthFirst = strlen($str);

   for($i=0; $i<$lengthFirst; $i++){
       if(in_array($str[$i],$vowel)){
          $countVowel ++;
       }
   }

   return "Original String: $str, Vowel Count: $countVowel, Reversed String: $reversedStr";
}
echo firstStr($firstStr) ,"\n";


//function for second string;

function secondStr($str){

   $reversedStr = strrev($str);
   $vowel = ['a','e','i','o','u'];
   $countVowel = 0;
   $lengthFirst = strlen($str);

   for($i=0; $i<$lengthFirst; $i++){
       if(in_array($str[$i],$vowel)){
          $countVowel ++;
       }
   }

   return "Original String: $str, Vowel Count: $countVowel, Reversed String: $reversedStr";
}
echo firstStr($secondStr) ,"\n";


//function for Third String;

function thirdStr($str){

   $reversedStr = strrev($str);
   $vowel = ['a','e','i','o','u'];
   $countVowel = 0;
   $lengthFirst = strlen($str);

   for($i=0; $i<$lengthFirst; $i++){
       if(in_array($str[$i],$vowel)){
          $countVowel ++;
       }
   }

   return "Original String: $str, Vowel Count: $countVowel, Reversed String: $reversedStr";
}
echo firstStr($thirdStr) ,"\n";


// function for Fourth String ;

function fourthStr($str){

   $reversedStr = strrev($str);
   $vowel = ['a','e','i','o','u'];
   $countVowel = 0;
   $lengthFirst = strlen($str);

   for($i=0; $i<$lengthFirst; $i++){
       if(in_array($str[$i],$vowel)){
          $countVowel ++;
       }
   }

   return "Original String: $str, Vowel Count: $countVowel, Reversed String: $reversedStr";
}
echo firstStr($fourthStr);

