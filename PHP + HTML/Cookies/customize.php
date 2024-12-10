
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['font_size'])&&isset($_POST['font_color'])){
    setcookie("font_size",$_POST['font_size'],(time()+3600*24*30));
    setcookie("font_color",$_POST['font_color'],(time()+3600*24*30));
    $msg = "Your settings have been saved.";
}


?>
<!doctype html>
<html lang="en">


<head>
    <!-- change to iso-8859-1 if you use that -->
    <meta charset="utf-8">
    <title>Title</title>
</head>


<body>
<?php
 if (isset($msg)){
     echo "<p>".$msg."</p>";
 }
?>
    <p>Use this form to set your preferences:</p>
    <form action="customize.php" method="post">
        <select name="font_size">
        <option value="">Font Size</option>
<?php
   $sizes=['xx-small','x-small','small','medium','large','x-large','xx-large'];
   foreach ($sizes as $size){
       echo "<option value=\"$size\">$size</option>\n";
   }
?>
       </select>
       <select name="font_color">
        <option value="">Font Color</option>
        <?php
   $colors=[999=>"Grey","0c0"=>"Green","00f"=>"Blue","c00"=>"Red","000"=>"Black"];
   foreach ($colors as $color_key=>$color_label){
       echo "<option value=\"$color_key\">$color_label</option>\n";
   }
?>
    </select>
    <input type="submit" value="Set your preferences">
   </form>
</body>


</html>
