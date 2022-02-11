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
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
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
echo "<br>"."Functions"."<br>";
function printStringReturnNumber(string $string):int
{
    echo $string."<br>";
    return 45543221;
}
$my_num = printStringReturnNumber('Ono Rabotaet');
echo $my_num;
/////////////stage8 (16)///////////////////////
echo "<br>"."Functions_Part2 stage16"."<br>";
function increaseEnthusiasm(string $string):string
{
    $string.='!';
    return $string;
}
echo increaseEnthusiasm('I don\'t know what to write here')."<br>";
////////////////////REPEATER///////////////////////////////////////////////
function repeatThreeTimes(string $string):string
{
    $string.=$string.$string;
    return $string;
}
echo repeatThreeTimes(increaseEnthusiasm('Tri_Tankista'))."<br>";
/////////////////////////////////////CUT////////////////////////////////////////////
function cut(string $string, int $int=10):string
{
    $ret = "";
    for($i = 0; $i < $int; $i++)
        $ret.=$string[$i];
    return $ret;
}
echo cut("I am happy and i know it",11)."<br>";
/////////////////////////////Array stuff///////////////////////////////
function AlterArray($arr, $num)
{
    if ($num < sizeof($arr))
    {
        echo $arr[$num]." ";
        AlterArray($arr, $num+1);
    }
}
$array = array(10,20,13,4,67,7,9,19);
AlterArray($array, 0);

function SumOfNumbers($num)
{
    $sum = 0;
    while ($num > 0)
    {
        $sum+=$num%10;
        $num/=10;
    }
    if ($sum > 9) return SumOfNumbers($sum);
    else return($sum);
}
echo "<br>"."Сумма чисел равна ".SumOfNumbers(167)."<br>";

/////////////stage9 (17)///////////////////////
echo "<br>"."Arrays stage17"."<br>";;
$Numbers7=[];
for ($i = 1; $i <= 7; $i++)
{
    $Numbers7[$i-1]='';
    for ($j = 0; $j < $i; $j++)
        $Numbers7[$i-1].='x';
}
print_r($Numbers7);
/////////////Array fill//////////////////////////
function arrayFill($vol, int $num)
{
    $newNumbers = [];
    for ($i = 1; $i <= $num; $i++) {
        $newNumbers[$i - 1] = '';
        for ($j = 0; $j < $i; $j++)
            $newNumbers[$i - 1] .= $vol;
    }
    return $newNumbers;
}
echo "<br>";
print_r(arrayFill('YES',4));
echo "<br>";
////////////////////////ДВумерный массив///////////////////////////////
$Numbers8 = [[1,2,8],[4,5],[6],[34,67,890,1]];
$sum = 0;
foreach ($Numbers8 as $value)
{
    foreach ($value as $num)
    {
        $sum += $num;
    }
}
echo "<br>"."Sum of numbers ".$sum."<br>";
/////////////////////Цикл массиыный///////////
$Numbers9 = [];
$counter = 1;
for($i = 0; $i < 3; $i++)
    for($j = 0; $j < 3; $j++)
        $Numbers9 [$i][$j] = $counter++;
print_r($Numbers9);

$arr4=[2,5,3,9];
$result = $arr4[0]* $arr4[1]+ $arr4[2]* $arr4[3];
echo "<br>".$result."<br>";
/////////////////////Имя Фанилия/////////
$user = ['name' => 'Dmitrii', 'surname' => 'Zmachinskii', 'patronymic' => 'Germanovich',89,76];
echo $user['surname']." ".$user['name']." ".$user['patronymic']."<br>";

$date = ['year' => 2022, 'month' => '02', 'day' => '11'];
echo "Today is {$date['year']}-{$date['month']}-{$date['day']}<br>";
$arr = ['a', 'b', 'c', 'd', 'e'];
echo sizeof($arr)."<br>";
echo $arr[sizeof($arr)-1]."<br>";
echo $arr[sizeof($arr)-2]."<br>";
/////////////stage10 (18)///////////////////////
echo "<br>"."If ELSE stage18"."<br>";
function Desyatka(int $a, int $b):bool
{
    if ($a+$b > 10)
        return true;
    else
        return false;
}
echo Desyatka(2, 9). "<br>" ;
function Isequal(int $a, int $b):bool
{
    if ($a == $b)
        return true;
    else
        return false;
}
if (Isequal(51,51)) echo "Числа равны<br>";
$test = 0;
echo ($test == 0) ? 'true<br>' : 'false<br>';
$age = rand(0, 300);
echo "age = {$age}<br>";
if ($age < 10) echo "{$age} is lower than 10<br>";
else if ($age > 99) echo "{$age} is higher than 99<br>";
else
{
    $sum = 0;
    for ($i = 0; $i < strlen($age); $i++)
    {
        $sum += $age%10;
        $age/=10;
    }
    echo ($sum > 9) ? "sum is two-digit<br>" : "sum is one-digit<br>";
}

$Numbers10 = [9,4,31,6];
$sum = array_sum(Numbers10);
echo (sizeof(Numbers10) == 3) ? "{$sum}<br>" : "oops" ;
/////////////stage10 (19)///////////////////////
echo "<br>"." stage19"."<br>";
