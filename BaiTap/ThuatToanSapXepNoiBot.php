<?php


$myArr = [1, 9, 4.5, 6.6, 5.7, -4.5];
$count = count($myArr);
$t = 0;
for ($i = 0; $i < $count; $i++) {
    for ($j = $i +1 ; $j < $count; $j++) {
        if($myArr[$i] > $myArr[$j]){
            $temb = $myArr[$j];
            $myArr[$j] = $myArr[$i];
            $myArr[$i]=$temb;

        }
    }
}
for ($i = 0; $i < $count; $i++) {
    echo $myArr[$i] ."  ";
}