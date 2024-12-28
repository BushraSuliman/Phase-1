 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-3</title>
 </head>
 <body>

  <?php

   // Student's marks
   $marks = 99;  // You can change this value to test different grades

   // Grade based on the marks
  if ($marks >= 90 && $marks <= 100) {
    $grade = 'A';
       } 

  elseif ($marks >= 80 && $marks <= 89) {
    $grade = 'B';
       } 

  elseif ($marks >= 70 && $marks <= 79) {
    $grade = 'C';
       } 

  elseif ($marks >= 60 && $marks <= 69) {
    $grade = 'D';
       }

  elseif ($marks >= 0 && $marks <= 59){
    $grade = 'F';
      }

  else {
    $grade = 'Error';
      }

   // Grade Output
  echo "The student's grade is: " . $grade;

    ?>

 </body>
 </html>