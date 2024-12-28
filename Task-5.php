<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       function reverseString($string) {
        $reversed = '';
        for ($i = strlen($string) - 1; $i >= 0; $i--) {
            $reversed .= $string[$i];
        }
        return $reversed;
    }
    
    // Reversed String
      $originalString = "Learning PHP";
      $reversedString = reverseString($originalString);
    echo "Original String: $originalString";
    echo "</br>";
    echo "Reversed String: $reversedString";


    ?>
</body>
</html>