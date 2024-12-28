<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <style>
    .error{
      color: red;
    }
  </style>
</head>

<body>
  <?php 
 // define variables and set to empty values
 $fnameErr = $lnameErr = $dateErr = $addressErr = $numberErr = $emailErr = "";
   $fname = $lname = $date = $address = $number = $email = "";
                      
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
   if (empty($_POST["fname"])) {
     $fnameErr = "First Name is required";
   } else {     
     $fname = filter_var( $_POST['fname'],FILTER_SANITIZE_STRING); 
   }


   if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required";
  } else {     
    $lname = filter_var( $_POST['lname'],FILTER_SANITIZE_STRING);
  }


  if (empty($_POST["date"])) {
    $dateErr = "Email is required";
  } else {
    $date = test_input($_POST["date"]);
  }


  if (empty($_POST["address"])) {
    $addressErr = "Role is required";
  } else {     
    $address = filter_var( $_POST['address'],FILTER_SANITIZE_STRING);
  }

  if (empty($_POST["number"])) {
    $numberErr = "Mobile Number is required";
  } else {     
    $number = filter_var( $_POST['number'],FILTER_SANITIZE_STRING);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {     
    $email = filter_var( $_POST['email'],FILTER_SANITIZE_STRING);
  }

 }

 function test_input($data) //    ali
 {       
   $data = trim($data);
   $data = stripslashes($data);  
   $data = htmlspecialchars($data);
   return $data;   
 }

  
  ?>
 <div class="container mt-5 mb-5 bg-primary p-4 text-white rounded-4 align-items-center">
 <h2 class="text-center mb-4">Registration Form</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

  <div class="mb-3">
  <label for="fname" class="form-label">First Name:</label>
    <input type="text" class="form-control" id="fname" name="fname">
    <span class="error">* <?php echo $fnameErr; ?></span>
    </div>

    <div class="mb-3">
    <label for="lname" class="form-label">Last Name:</label>
    <input type="text" class="form-control" id="lname" name="lname">
    <span class="error">* <?php echo $lnameErr; ?></span>
    </div>

    <div class="mb-3">
    <label for="date" class="form-label">Date:</label>
    <input type="date" class="form-control" id="date" name="date">
    <span class="error">* <?php echo $dateErr; ?></span>
    </div>

    <div class="mb-3">
    <label for="address" class="form-label">Address:</label>
    <input type="text" class="form-control" id="address" name="address">
    <span class="error">* <?php echo $addressErr; ?></span>
    </div>

    <div class="mb-3">
    <label for="number" class="form-label">Mobile Number:</label>
    <input type="number"  class="form-control" id="number" name="number">
    <span class="error">* <?php echo $numberErr; ?></span>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" name="email">
    <span class="error">* <?php echo $emailErr; ?></span>
    </div>

    <input type="submit" name="submit" value="Submit">

  </form>
</div>
  
  <div class="container justify-content-center align-items-center">
    <!-- PHP Code -->
    <?php
     {
        echo "<h3 class='mt-5'>Submitted Data</h3>";
        echo "<table class='table table-bordered'>";
        echo "<tr><th>Field</th><th>Value</th></tr>";
        echo "<tr><td>First Name</td><td>$fname</td></tr>";
        echo "<tr><td>Last Name</td><td>$lname</td></tr>";
        echo "<tr><td>Date</td><td>$date</td></tr>";
        echo "<tr><td>Address</td><td>$address</td></tr>";
        echo "<tr><td>Phone Number</td><td>$number</td></tr>";
        echo "<tr><td>Email</td><td>$email</td></tr>";
        echo "</table>";
      }
    ?>
   </div>

    <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>