<?php
//*-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-*
//                                  Practical-13 IU2141050039 
//*-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-*

$string = "Hello, world!";

// Get the length of a string
$length = strlen($string);
echo "The length of the string is $length characters";

// Find the position of a substring
$position = strpos($string, "world");
echo "The substring 'world' is found at position $position";

// Replace a substring
$newString = str_replace("world", "universe", $string);
echo "\nThe new string is $newString";

// Convert a string to lowercase
$lowercaseString = strtolower($string);
echo "\nThe lowercase string is $lowercaseString";

// Convert a string to uppercase
$uppercaseString = strtoupper($string);
echo "\nThe uppercase string is $uppercaseString";

// Trim whitespace from a string
$trimmedString = trim($string);
echo "\nThe trimmed string is $trimmedString";

// // Check if a string starts with a substring
// $startsWith = startsWith($string, "Hello");
// echo "The string starts with 'Hello': $startsWith";

// // Check if a string ends with a substring
// $endsWith = endsWith($string, "!");
// echo "The string ends with '!': $endsWith";

// Reverse a string
$reversedString = strrev($string);
echo "\nThe reversed string is $reversedString";

// Split a string into an array
$words = explode(" ", $string);
print_r($words);

// Join an array into a string
$newString = implode(", ", $words);
echo "The new string is $newString";

// Check if a string contains only alphanumeric characters
$isAlphanumeric = ctype_alnum($string);
echo "The string is alphanumeric: $isAlphanumeric";

// Check if a string is a valid email address
$isValidEmail = filter_var("user@example.com", FILTER_VALIDATE_EMAIL);
echo "The email address is valid: $isValidEmail";

// Check if a string is a valid URL
$isValidURL = filter_var("https://www.example.com", FILTER_VALIDATE_URL);
echo "The URL is valid: $isValidURL";

// Hash a string
$hash = hash("sha256", $string);
echo "The hash of the string is $hash";

?>


