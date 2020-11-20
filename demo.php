<?php
//
//$myArr = [1, 1, 7, 6, 5, 4, 3, 2, 1, 3, 2, 1];
//$count = count($myArr);
//$t = 0;
//for ($i = 0; $i < $count; $i++) {
//    for ($j = 0; $j < $count - $i - 1; $j++) {
//        if ($myArr[$j] < $myArr[$j + 1]) {
//            $temp = $myArr[$j + 1];
//            $myArr[$j + 1] = $myArr[$j];
//            $myArr[$j] = $temp;
//        }
//    }
//}
//for ($i = 0; $i < $count; $i++) {
//    echo $myArr[$i] . " ";
//}


function insertion_Sort($my_array)
{
    for ($i = 0; $i < count($my_array); $i++) {
        $val = $my_array[$i];
        $j = $i - 1;
        while ($j >= 0 && $my_array[$j] > $val) {
            $my_array[$j + 1] = $my_array[$j];
            $j--;
        }
        $my_array[$j + 1] = $val;
    }
    return $my_array;
}

$test_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ', $test_array);
echo "\nSorted Array :\n";
print_r(insertion_Sort($test_array));