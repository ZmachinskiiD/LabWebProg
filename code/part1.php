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