<?php

function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split($str) as $char) {
        if (in_array(strtolower($char), $vowels)) {
            $count++;
        }
    }
    return $count;
}

function arrayStringsProgram($strings) {
    foreach ($strings as $str) {
        $vowelCount = countVowels($str);
        $reversedStr = strrev($str);
        echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversedStr\n";
    }
}

$strings = ["Hello", "World", "PHP", "Programming"];

arrayStringsProgram($strings);

?>
