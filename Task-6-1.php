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
 $fnameErr = $lnameErr = $emailErr = $genderErr = $roleErr = $usernameErr = $passwordErr = "";
 $fname = $lname = $email = $gender = $role = $username = $password = "";
                      
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


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {    
    $gender = isset($_POST['gender']) ? implode(", ", $_POST['gender']) : "Not specified"; 
  }


  if (empty($_POST["role"])) {
    $roleErr = "Role is required";
  } else {     
    $role = filter_var( $_POST['role'],FILTER_SANITIZE_STRING);
  }


  if (empty($_POST["username"])) {
    $usernameErr = "User Name is required";
  } else {     
    $username = filter_var( $_POST['username'],FILTER_SANITIZE_STRING);
  }


  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {     
    $password = filter_var( $_POST['password'],FILTER_SANITIZE_STRING);
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
    <label for="last_name" class="form-label">Last Name:</label>
    <input type="text" class="form-control" id="lname" name="lname">
    <span class="error">* <?php echo $lnameErr; ?></span>
    </div>

    <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="text" class="form-control" id="email" name="email">
    <span class="error">* <?php echo $emailErr; ?></span>
    </div>

    <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <div class="form-check">
          <input class="form-check-input" type="checkbox" id="male" name="gender[]" value="Male">
          <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="female" name="gender[]" value="Female">
          <label class="form-check-label" for="female">Female</label>
        </div>
    <span class="error">* <?php echo $genderErr; ?></span>
    </div>

    <div class="mb-3">
    <label for="role" class="form-label">Role</label>
        <select class="form-select" id="role" name="role" required>
          <option value="Admin">Admin</option>
          <option value="Student">Student</option>
          <option value="Teacher">Teacher</option>
        </select>
    <span class="error">* <?php echo $roleErr; ?></span>
    </div>

    <div class="mb-3">
    <label for="username" class="form-label">Username:</label>
    <input type="text" class="form-control" id="username" name="username">
    <span class="error">* <?php echo $usernameErr; ?></span>
    </div>

    <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password"  class="form-control" id="password" name="password">
    <span class="error">* <?php echo $passwordErr; ?></span>
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
        echo "<tr><td>Email</td><td>$email</td></tr>";
        echo "<tr><td>Gender</td><td>$gender</td></tr>";
        echo "<tr><td>Role</td><td>$role</td></tr>";
        echo "<tr><td>Username</td><td>$username</td></tr>";
        echo "<tr><td>Password</td><td>$password</td></tr>";
        echo "</table>";
      }
    ?>
   </div>

    <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>