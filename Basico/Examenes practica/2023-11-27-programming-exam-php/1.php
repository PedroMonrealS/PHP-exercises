
<!doctype html>
<html lang="en">

<head>
    <!-- change to utf-8 if you use that -->
    <meta charset="iso-8859-1">
    <title>Quiz</title>
</head>
<?php
$questions = [
    [
        'id' => 0,
        'statement' => "What's the capital of Spain?",
        'right-answer' => 'B'
    ],
    [
        'id' => 1,
        'statement' => "How much is 20 + 5?",
        'right-answer' => 'C'
    ]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $incorrectas=0;
    foreach($correct as $question => $res){
        if($_POST[$question] == $res){
        }
        else
        {
            $incorrectas++;
        }
    } 
    if($incorrectas !== 0){
    echo "There are $incorrectas incorrect answers. <br>";
    echo "Change your answers and try again.";
    }
    else
    echo "All correct";
    }
?>

<body>
    <form action="" method="post">
        <p>What's the capital of Spain?</p>
        <ul>
            <li><input type="radio" id="q1a" name="q1" value="Madrid">
                <label for="q1a">Madrid</label></li>
            <li><input type="radio" id="q1b" name="q1" value="Barcelona">
                <label for="q1b">Barcelona</label></li>
            <li><input type="radio" id="q1c" name="q1" value="Sevilla">
                <label for="q1c">Sevilla</label></li>
        </ul>

        <p>How many is 20 + 5?</p>
        <ul>
            <li><input type="radio" id="q2a" name="q2" value="25">
                <label for="q2a">25</label></li>
            <li><input type="radio" id="q2b" name="q2" value="21">
                <label for="q2b">21</label></li>
            <li><input type="radio" id="q2c" name="q2" value="30">
                <label for="q2c">30</label></li>
        </ul>

        <input type="submit" value="Submit">
    </form>
</body>

</html>