<?php

// Define the array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Iterate over each string in the array
foreach ($strings as $string) {
    // Initialize vowel count
    $vowelCount = 0;

    // Count the number of vowels in the string
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    foreach (str_split($string) as $char) {
        if (in_array($char, $vowels)) {
            $vowelCount++;
        }
    }

    // Reverse the string
    $reversedString = strrev($string);

    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}


