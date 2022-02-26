<?php
////////////////////TASK A//////////////////////////////
echo "ПУНКТ 1А";
echo "<br>" ;
echo "Все строки";
echo "<br>" ;
$str = " aqqwb adcb ahb acb aeb aeeb adcb axeb yabv aeebr aytb assb ghty oelro ";
$M_str = [];
echo $str;
echo "<br>" ;
preg_match_all("/a..b/", $str, $M_str);
echo  "Строки удовлетворяющие критериям:";
echo "<br>" ;
foreach ($M_str[0] as $m1)
{
    echo " " . $m1;
}
////////////////////TASK B/////////////////////////////
echo "<br>". "ПУНКТ 1B". "<br>";
$str = "a1b2c3";
echo "Начальная строка". "<br>";
echo $str . "<br>";
$cubify = preg_replace_callback
(
    "/[0-9]+/",
    function (array $m2)
    {
        return ((int)($m2[0]) ** 3)."";
    },
    $str
);
echo  "Изменённая строка: ". "<br>" ;
echo  $cubify;

echo "<br><br>";


// task 2(a)
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>reg exp and file work</title>
    </head>
    <body>
    <form method="POST">
        <label>
<textarea name="textToParse"
          placeholder="Input your stuff"
          rows="20" cols="50"></textarea>
        </label>
        <input type="submit" name="getWordsAndSymbols" value="Сount stuff ">
    </form>
    </body>
    </html>

<?php
if ($_POST['getWordsAndSymbols'])
{
    if ($_POST['textToParse'])
    {
        $_SESSION['textInfo'] = str_word_count($_POST['textToParse'],
                0) . ' Words<br>';

        $_SESSION['textInfo'] .= strlen($_POST['textToParse']) . ' Symbols<br>';

    } else
    {

        $_SESSION['textInfo'] = 'U didnt put anything u stupid';
    }
}
echo $_SESSION['textInfo'];
///////////////////////////////b//////////////////////////////////////////////////////////
?>
    <body>
    <form method="POST">
        <label>
            NAME<input type="text" name="name" required><br>
            SURNAME<input type="text" name="surname" required><br>
            AGE<input type="number" name="age" required><br>
            <input type="submit" value="Записать в сессию" name="sendToSession">
        </label>
    </form>
    <a href="/UserInformation.php">User Information</a>
    </body>
<?php
if ($_POST['sendToSession'])
{
    if ($_POST['name'] && $_POST['surname'] && $_POST['age'])
    {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['surname'] = $_POST['surname'];
        $_SESSION['age'] = $_POST['age'];
    }
}
?>
<body>
<form method="POST">
    <label>
        NAME<input type="text" name="name_2" ><br>
        SURNAME<input type="text" name="surname_2" required><br>
        SALARY<input type="number" name="salary_2" required><br>
        MARITAL STATUS
        <select name="status" required>
            <option>SINGLE</option>
            <option>MARRIED</option>
            <option>DIVORCED</option>
            <option>WIDOW(ER)</option>
        </select><br>
        <input type="submit" value="Записать в сессию" name="sendToSessionArray"><br>
    </label>
    <a href="/UserInformation.php">User Information</a>
</form>
</body>
<?php
if ($_POST['sendToSessionArray']) {
    if ($_POST['name_2'] && $_POST['surname_2'] && $_POST['salary_2'] && $_POST['status']) {
        $_SESSION['userInformation'] = array('name' => $_POST['name_2'],
            'surname' => $_POST['surname_2'],
            'salary' => $_POST['salary_2'],
            'status' => $_POST['status']
        );
    }
}
?>



