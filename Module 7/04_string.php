<!-- String : php string is a sequence of characters.
 string types
 1. single quoted
 2. double quoted
 3. heredoc syntax
 4. nowdoc syntax -->

<?php
$name="Cat";

$single_str0 = 'Hello World Single '.$name; //for concat worked .
echo $single_str0 ."<br>"."<br>";

$double_str0 = "Hello World Double ".$name; //for concat worked .
echo $double_str0 ."<br>"."<br>";

$single_str1 = 'Hello World Single {$name}'; //for concat not worked {}
echo $single_str1 ."<br>"."<br>";

$double_str1 = "Hello World Double {$name}"; //for concat worked {} (recommended)
echo $double_str1 ."<br>"."<br>"; 

$heredoc_str = <<<STR
    Hello World Heredoc 
STR; //in a heredoc string start with one or more characters and end with same characters.
echo $heredoc_str ."<br>"."<br>";

$nowdoc_str = <<<"STR"
    Hello World Nowdoc
STR; //in a nowdoc string start with one or more characters with '' / "" and end with same characters without '' / "".
echo $nowdoc_str ."<br>"."<br>";


// String Operation or Methods or Manipulation
$city = "Dhaka is our city";

echo strlen($city) ."<br>"."<br>"; // strlen() length of string.

echo str_word_count($city) ."<br>"."<br>"; // str_word_count() number of word count.

echo strrev($city) ."<br>"."<br>"; //strrev() string reverse.

echo strpos($city, "Dhaka") ."<br>"."<br>"; //search text inside string.

echo str_replace("World", "AHS", "Hello World") ."<br>"."<br>"; // replace specific character.

// implode() a array to convert string and explode() a string to convert array.

$str = "My Name is Abu";

echo strtoupper($str) ."<br>"."<br>"; //string uppercase.

echo strtolower($str) ."<br>"."<br>"; //string lowercase.

echo str_repeat("wow", 100) ."<br>"."<br>"; //string repeat.

echo sha1("Hello") ."<br>"."<br>"; // string hashing/encryption.

echo md5("Hello") ."<br>"."<br>"; // string hashing/encryption.
