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