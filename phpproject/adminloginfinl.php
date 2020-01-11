<?php

// initializing variables
  $uname = $pass = $wrongErr = $unameErr = $passErr = "";

// LOGIN USERss
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uname = test_input($_POST['uname']);
  $pass = test_input($_POST['pass']);

  if (empty($uname)) {
    $unameErr = "Username is required";
  }
  if (empty($pass)) {
    $passErr = "Password is required";
  }

  if (empty($unameErr) && empty($passErr)) {

    $password = md5($pass);
    
    $query = "SELECT * FROM admintb WHERE username='$uname' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      while ($row = mysqli_fetch_assoc($results)){
                $uname = $row['fname'];
              }

      $_SESSION['username'] = $uname;
      $_SESSION['success'] = "You are now logged in";
      header('location: admin.php');
    }else {
      $wrongErr = "Wrong username or password ";
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        div.card {
            border: 1px solid lightgrey;
            padding-top: 80px;
            display: inline-block;
            padding: 30px;
            border-radius: 5%;
            background-color: aliceblue;
        }
        div.container {
            padding: 20px;
            font-size: 30px;
        }
    </style>
</head>
<body style="background-image: url(./img/book.jpeg); background-size: 100% 125%;background-repeat:no-repeat">

<h2>ADMIN LOGIN</h2>
<style>.req {color:red; font-style: italic;}</style>

<div class="container">
    <div class="col-sm-4 ">
    <div class="card">
    <form action="adminedrive.php" method="POST">
    <span class="req"> <?php echo $wrongErr;?></span>
           <label for="username">Username</label><br>
            <input style="font-size: 20px" type="text" name="uname" placeholder="enter username"><span class="req"> <?php echo $unameErr;?></span><br><br>
            <label for="password">Password</label><br>
            <input style="font-size: 20px" type="password" name="pass" placeholder="enter password"><span class="req"> <?php echo $passErr;?></span><br><br>
            <input style="font-size: 40px" type="submit" value="Log in" name="login" ><br>
         <!--    <h4>Not have an account ??? <a href="adminsignup.php" style="color: darkorange">Signup here</a></h4> -->
        </form><br>
    </div>
    </div>
<div class="col-sm-8 "></div>
</div>  
</body>
</html>