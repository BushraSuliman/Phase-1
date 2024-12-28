<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries and Capitals</title>
</head>
<body>
    <h1>Countries and Capitals</h1>
            <?php
            // The capitals array
            $capitals = array(
             "Italy"=>"Rome.",
             "Luxembourg"=>"Luxembourg.",
             "Belgium"=>"Brussels.",
             "Denmark"=>"Copenhagen.",
             "Finland"=>"Helsinki.",
             "France"=>"Paris.",
             "Pakistan"=>"Islamabad."
            );
            // Print for all
           //print_r($capitals)
           // Output of array using echo

           foreach ($capitals as $cities=> $cities_value){
                echo "The capital of"." ". $cities." ". "is". " ". $cities_value;
                echo "</br>";
           }
               

            ?>
    <h2>Name: Bushra Suliman</h2>
</body>
</html>
