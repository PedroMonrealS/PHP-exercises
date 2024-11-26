
<!doctype html>
<html lang="en">

<head>
    <!-- change to utf-8 if you use that -->
    <meta charset="iso-8859-1">
    <title>Quiz</title>
</head>
<?php
var_dump( $_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {
        if(isset($_POST['form_id'])){
            result();
        }
        else
        {
        $username = $_POST['name'];
        capitalsform($username);
        }
    } else {
        echo "Por favor ingresa tu nombre.";
    }
} else {
    formName();
}



function formName(){
echo "<h1>Welcome to the form</h1>";
echo "<form action='' method='post'>";
echo "<label for='name'>Username: (surname1 surname2, name) </label>";
echo "<input type='text' name='name'>";
echo "<p>Form type</p>";
echo "<select name='form_type'>";
echo "<option value='Capitals'>Ask capitals</option>";
echo "<option value='Countries'>Ask countries</option>";
echo "<select>";
echo "<input type='submit'>";

//POST username
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['name'];
    $form_type = $_POST['form_type'];
    echo "<h1>$form_type form</h1>";
    if($form_type=="Capitals"){
    capitalsform($username);
    }
}
}

function capitalsform($username){
echo "<h2>Welcome, $username</h2>";
//Questions capitals
$questionsCapitals = [
    [
        'id' => 0,
        'statement' => "What's the capital of Spain?",
        'answers' => ["Madrid","Barcelona","Sevilla"],
        'right-answer' => 'Madrid'

    ],
    [
        'id' => 1,
        'statement' => "What's the capital of China?",
        'answers' => ["Shanghái","Wuhan","Pekin"],
        'right-answer' => 'Pekin'
    ]
];

echo "<form action='' method='post'>";
echo "<input type='hidden' name='form_id' value='capitals'>";
foreach($questionsCapitals as $question) {
    $questionid=$question["id"];
    echo "<p>{$question['statement']}</p>";
    echo "<ul>";
    foreach($question['answers'] as $answer) {
        echo '<li><input type="radio" name="' . $questionid .'" value="' . $answer . '"> ' . $answer . '</li>';

    }
    echo "</ul>";
}
echo "<input type='submit'>";
echo "</form>";

}

function result(){
echo "Vamos a ver el resultado";
}
?>


<body>
    <!-- <form action="" method="post">
        <label for="name">Username (surname1 surname2, name)</label>
        <input type="text" name="name">
        <p>Form type</p>
        <select name="form_type">
        <option value="capitals">Ask capitals</option>
        <option value="countries">Ask countries</option>
        </select>
        <br><br>
        <input type="submit">

        </select>
    </form> -->
</body>

</html>