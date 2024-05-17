<?php
// Input array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Count vowels function
function countVowels($str) {
   $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
   $vowelCount = 0;
   for ($i = 0; $i < strlen($str); $i++) {
       if (in_array($str[$i], $vowels)) {
           $vowelCount++;
       }
   }
   return $vowelCount;
}


foreach ($strings as $string) {
    // Count vowels in the string
    $count = countVowels($string);
    // Reverse the string
    $reversedString = strrev($string);
    // Print
    printf("Original String: %s, Vowel Count: %d, Reversed String: %s\n", $string, $count, $reversedString);
}

