<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $string){
    $vowelCount = 0;
    $length = strlen($string);
    for($i=0;$i<$length;$i++){
        if(strtolower($string[$i])=='a'){
            $vowelCount++;
        }elseif(strtolower($string[$i])=='e'){
            $vowelCount++;
        }elseif(strtolower($string[$i])=='i'){
            $vowelCount++;
        }elseif(strtolower($string[$i])=='o'){
            $vowelCount++;
        }elseif(strtolower($string[$i])=='u'){
            $vowelCount++;
        }
    }
    $reverseString = strrev($string);
    echo "Original String: {$string}, Vowel Count: {$vowelCount}, Reversed String: {$reverseString}".PHP_EOL;
}