<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities Names Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
     
     <?php
         $cities = array("Karachi", "Islamabad", "Lahore", "Peshawar", "Skardu", "Gilgit");
         $names = count($cities)

         
         ?>
         <table>
    <tr>
        <th>S.No</th>
        <th>Cities Names</th>
    </tr>
    <?php
    //for each-loop
    //foreach ($cities as $nam){
     //   echo $nam , "</br>";
    //}
    // for-loop
        for($i = 0; $i<$names;$i++){
           echo "<tr><td>$i</td> <td>$cities[$i]</td></tr>";
         }
         ?>
    </table>
         
</body>
</html>
