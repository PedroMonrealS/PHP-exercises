<?php
require("head.php"); //also include();
  define("USER","arigo");
  define("PASS","201223");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- change to utf-8 if you use that -->
    <meta charset="utf-8">
    <title>Login</title>
</head>

<body>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username==USER && $password==PASS) {
      //$loggedin = true;
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      echo "You are logged in<br>";
      echo "<a href='showbookmarks.php'>Show bookmarks</a>";
    } else {
      //$loggedin = false;
      $_SESSION['loggedin'] = false;
      echo "Wrong credentials<br>";
    }
  }
  ?>
    <h1>Login</h1>
    <form action="login.php" method="post">
      Username: <input type="text" name="username"><br>
      Password: <input type="password" name="password"><br>
      <input type="submit" value="Login"><br>
    </form></body>

</html>
