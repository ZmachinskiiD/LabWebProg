<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:
$order = &$very_bad_unclear_name;
$order .=" and a small diet coke";
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";
//Пункт 2
echo "<br>";
echo "Пункт 2"."<br>";
echo "<br>";
$Number = 33;
$TwentyOne=21;
echo $Number."<br>";
echo "\n" ;;
$SDRT = 12.34;
echo $SDRT. "<br>";
echo ($Number-$TwentyOne). "<br>";
$last_Month = 1187.23;
$this_Month = 1089.98;
echo ($last_Month-$this_Month)."<br>";
//Stage 3(11)///////////////////////////////////////
echo "<br>";
echo "Пункт 3(11)"."<br>";
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days/$num_languages;
echo $days_per_language."<br>";
/////////////stage4(12)///////////////////////
echo "Пункт 4(12)"."<br>";
echo 8**2;
echo "<br>";
/////////////stage5 (13)///////////////////////
echo "Пункт 5(13)"."<br>";
$mynum = 70;
$answer = $mynum;
$answer +=2;
$answer *=2;
$answer -=2;
$answer /=2;
$answer -=$mynum;
echo $answer."<br>";
/////////////stage6 (14)///////////////////////
echo "Пункт 6(14)"."<br>";
$a = 10;
$b = 3;
if (($a % $b) == 0)
    echo "Делиться ", $a / $b ;
else
    echo "Делиться с остатком ", $a % $b ;
echo "<br>";
$st = pow(2, 10);
echo $st."<br>";
echo sqrt(245)."<br>";
echo "Работа над массивом"."<br>";
$Numbers = [4,2,5,19,13,0,10];
$sum = 0;
foreach ($Numbers as $value)
    $sum = $sum + $value**2;
echo sqrt($sum)."<br>";
echo "Округление"."<br>";
echo round(sqrt(379), 0)."<br>";
echo round(sqrt(379), 1)."<br>";
echo round(sqrt(379), 2)."<br>";
echo "Ассоциативные массивы округления"."<br>";
$Numbers2 = array ('ceil' => ceil(sqrt(587)), 'floor' => floor(sqrt(587)));
echo $Numbers2['ceil']."<br>";
echo $Numbers2['floor']."<br>";
echo "Минимаксимум"."<br>";
echo min(4, -2, 5, 19, -130, 0, 10)."<br>";
echo max(4, -2, 5, 19, -130, 0, 10)."<br>";
echo "РАНДООООМ"."<br>";
echo rand(1, 100)."<br>";
$Numbers3 = [10];
for ($i = 0; $i < 10; $i++)
{
    $arr[$i] = rand(1,100);
    echo $arr[$i]." ";
}
echo "<br>"."Модуляция"."<br>";
echo abs(($b-$a))."<br>";
$Numbers4 = [1, 2, -1, -2, 3, -3];
foreach ($Numbers4 as $value) {
    $value = abs($value);
    echo $value." ";
}
echo "<br>"."Общее"."<br>";
$Deliteli = 612;
$dividerAlgorithm = [];
for ($i = 1; $i <= $Deliteli; $i++)
    if ($Deliteli % $i == 0)
        $dividerAlgorithm[] = $i;
print_r($dividerAlgorithm);
$Numbers5 = [1,2,3,4,5,6,7,8,9,10];
$sum = 0;
foreach ($Numbers5 as $value) {
    $sum += $value;
    if ($sum > 10)
    {
        echo "<br>".$value. "<br>";
        break;
    }
}
/////////////stage7 (15)///////////////////////