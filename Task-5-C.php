<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

  function isPalindrome($string) {
    $processedString = strtolower(str_replace(' ', '', $string));
    
    // Reverse string
    $reversedString = strrev($processedString);
    
    // Check if the processed string is the same as the reversed string
    return $processedString === $reversedString;
      }

    // if  // else
   $testString = "nurses run";
   if (isPalindrome($testString)) {
    echo "'$testString' is a palindrome.";
      } 
     else {
         echo "'$testString' is not a palindrome.";
          }  


    ?>
</body>
</html>