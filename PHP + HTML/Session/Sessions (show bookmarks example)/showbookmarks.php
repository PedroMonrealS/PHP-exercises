<?php
require("head.php"); // or include()
?>
<!doctype html>
<html lang="en">

<head>
    <!-- change to utf-8 if you use that -->
    <meta charset="utf-8utf-8">
    <title>The best bookmarks ever</title>
</head>

<body>
<?php
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
?>
    <h1>The bookmarks</h1>
    <ol>
      <li><a href="https://santjosepobrer.es">Sant Josep Obrer</a></li>
      <li><a href="https://santjosepobrer1.clickedu.eu">ClickEdu</a></li>
    </ol>
<?php
  } else {
?>
    <h1>You are not logged in</h1>
    <p>Click <a href="login.php">here</a> to login</p>

<?php
  }
?>  
</body>

</html>
