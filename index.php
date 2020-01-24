<?php

/**
 *
 */
function timeAddition()
{
    date_default_timezone_set('America/New_York');

    # https://www.php.net/manual/en/function.date.php
    # Y = A full numeric representation of a year, 4 digits
    # n = Numeric representation of a month, without leading zeros
    # j = Day of the month without leading zeros
    # h = 12-hour format of an hour with leading zeros
    # i = Minutes with leading zeros
    # s = Seconds with leading zeros
    return date('Y') + date('n') + date('j') + date('h') + date('i') + date('s');
}

function vowelCount($string)
{
    $count = 0;

    foreach (str_split(strtolower($string)) as $character) {
        if (in_array($character, ['a','e','i','o','u'])) {
            $count++;
        }
    }

    return $count;
}

function letterShift($string)
{
    $results = '';

    $alphabet = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

    foreach (str_split($string) as $character) {
        $position = array_search($character, $alphabet);
        
        if (!$position) {
            $results .= $character;
        } else {
            if ($position == 25) {
                $shifted = 0;
            } elseif ($position == 49) {
                $shifted = 26;
            } else {
                $shifted = $position + 1;
            }

            $results .= $alphabet[$shifted];
        }
    }

    return $results;
}


$taskBStrings = [
    'the quick brown fox jumps over the lazy dog',
    'Hll Wrld',
    'AeIoU'
];
foreach ($taskBStrings as $string) {
    $taskBResults[$string] = vowelCount($string);
}

$taskCStrings = [
    'The zoo is open',
    'foobar@1',
    'aAb',
];
foreach ($taskCStrings as $string) {
    $taskCResults[$string] = letterShift($string);
}


require 'view.blade.php';
