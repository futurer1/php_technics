<?php

function specSortAssoc($sourсeArr) {
    $arr = [];
    foreach ($sourсeArr as $key => $val) {
        $arr[] = [$key => $val];
    }
    krsort($arr);
    $narr = [];
    foreach ($arr as $key => $val) {
        foreach ($val as $key1 => $val1) {
            $narr[$key1] = $val1;
        }
    }
    return $narr;
}


$sourсeArr = [
    3 => ['a' => 'data1'],
    8 => ['b' => 'data2'],
    1 => ['c' => 'data3'],
    6 => ['d' => 'data4'],
    5 => ['e' => 'data5'],
    2 => ['f' => 'data6'],
];
$res = specSortAssoc($sourсeArr);
foreach ($res as $k => $v) {
    echo $k . ' => [';
    foreach ($v as $k1 => $v1) {
        echo "'".$k1."' => '".$v1."'";
    }
    echo '],'.PHP_EOL;
}

/*
Вывод, массив в обратном порядке следования элементов:

2 => ['f' => 'data6'],
5 => ['e' => 'data5'],
6 => ['d' => 'data4'],
1 => ['c' => 'data3'],
8 => ['b' => 'data2'],
3 => ['a' => 'data1'],
*/
