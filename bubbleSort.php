<?php
/*
 * Author: Mizanur rahman <mizanur.rahman@gmail.com>
 * 
 * Description: Plain Bubble sort without any improvements
 * 
 */
function bubbleSort(array $arr): array {
    $count = 0;
    $len = count($arr);
    for ($i = 0; $i < $len; $i++) {
        for ($j = $len-1; $j > $i; $j--) {
            $count++;
            if ($arr[$i] > $arr[$j]) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
    echo "Total Comparisons: ".$count . "\n";
    return $arr;
}
$arr = [];
// $arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];

for($i = 1; $i < count($argv); $i++) {
    array_push($arr, $argv[$i]);
}


$sortedArray = bubbleSort($arr);
echo implode(",", $sortedArray);