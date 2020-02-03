<?php

session_start();

$inputString = $_GET['inputString'];

$_SESSION['results'] = [
    'inputString' => $inputString,
    'taskA' => isPalindrome($inputString),
    'taskB' => vowelCount($inputString),
    'taskC' => letterShift($inputString)
];

header('location: index.php');


/**
 *
 */
function isPalindrome($string)
{
    # Reduce string down to just letters a-z
    $string = preg_replace("/[^a-z]/", '', strtolower($string));

    return strrev($string) == $string;
}

/**
 *
 */
function vowelCount($string)
{
    $count = 0;

    # Split the string into an array of characters, all lowercase
    $characters = str_split(strtolower($string));
    
    # Loop through each cahracter, incrementing count if it is a vowel
    foreach ($characters as $character) {
        if (in_array($character, ['a','e','i','o','u'])) {
            $count++;
        }
    }

    return $count;
}

/**
 *
 */
function letterShift($string)
{
    $results = '';

    # Create an array of letters in the alphabet
    $alphabet = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

    # Loop through each character in the input string
    foreach (str_split($string) as $character) {

        # Determine which position this character has in the alphabet
        $position = array_search($character, $alphabet);
        
        # If `position` is false, it's not in the alphabet, so include as is
        if (!$position) {
            $results .= $character;
        } else {
            # If `position` is 25, the letter is lowercase `z` so we loop back to 0 (`a`)
            if ($position == 25) {
                $newPosition = 0;
            # If `position` is `49` the letter is uppercase `Z` so we loop back to 26 (`A`)
            } elseif ($position == 49) {
                $newPosition = 26;
            # For all other letters, shift the position +1
            } else {
                $newPosition = $position + 1;
            }

            # Build the results extracting the new letter from the alphabet using our new position
            $results .= $alphabet[$newPosition];
        }
    }

    return $results;
}
