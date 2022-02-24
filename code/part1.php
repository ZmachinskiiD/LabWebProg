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