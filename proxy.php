<?php 

$input_text=$_GET['input_text'];

// Complete the function below.
//
// Given a string $str, find the longest palindrome contained within it.
// A palindrome is a string of length 2 or greater that is the same
// both backward and forward:
//
// abba
// racecar
//
// A one-character string is *not* a palindrome.
//
// For simplicity, assume that the string will consist only of
// lower-case alphabetic characters
//
// e.g.
// 'aidivabbaiueu' should return 'abba'
// 'racecar' should return 'racecar'
// 'asdfzxcvqwer' should return '' (an empty string)
//

/*
* @param string $str
* @returns string
*/

function isPalendrone($string) {
  if ( ($string == strrev($string)) && (strlen($string) > 1) )
    return true;
  else
    return false;
}

//function takes a string and returns the longest palindrome (2 or more characters that read the same backwords and forwards) in that string.  Will return empty string if no palindrome 

function longestPalindrome($string) {

    $longest = "";

    for($i = 0; $i < strlen($string); $i++) 
    {
        $afterCurrent = substr($string, $i);
        for($j = 1; $j <= strlen($afterCurrent); $j++) 
        {
           $section = substr($afterCurrent, 0, $j);
            if(isPalendrone($section)) 
            {
                if(strlen($longest)<strlen($section)) 
                {
                    $longest = $section;
                }
            }
        }
    }

    return '{"return_string":"' . $longest . '"}';

}


echo longestPalindrome($input_text); 

?>