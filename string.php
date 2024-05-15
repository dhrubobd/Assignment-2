<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $string){
    $vowelCount = 0;
    $reverseString = strrev($string);
    echo "Original String: {$string}, Vowel Count: {$vowelCount}, Reversed String: {$reverseString}".PHP_EOL;
}