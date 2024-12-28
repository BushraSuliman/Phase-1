<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      
 function calculateFactorial($number) {
    if ($number < 0) {
        return "Factorial is not defined for negative numbers.";
    }
    if ($number === 0 || $number === 1) {
        return 1;
    }
    
    $factorial = 1;
    for ($i = 2; $i <= $number; $i++) {
        $factorial *= $i;
    }
    
    return $factorial;
  }

     // factorial
     $number = 5;
     $result = calculateFactorial($number);
     echo "The factorial of $number is: $result";

    ?>
</body>
</html>