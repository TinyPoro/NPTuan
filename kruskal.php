<?php
/* 
 * Example code for: PHP 7 Data Structures and Algorithms
 * 
 * Author: Mizanur rahman <mizanur.rahman@gmail.com>
 * 
 */
function kruskal(array $graph): array {
    $len = count($graph);       //độ dài độ thị = số đỉnh
    $tree = [];         //cây
    $set = [];          //các tập


    //với 1 đỉnh của đồ thị tạo 1 set có key-value = tên đỉnh
    foreach ($graph as $k => $adj) {
	   $set[$k] = [$k];
    }

    $edges = [];  //cạnh

    //gán độ dài cho cạnh tương ứng - edges[x,y] = khoảng cách từ đỉnh x đến đỉnh y
    for ($i = 0; $i < $len; $i++) {
    	for ($j = 0; $j < $i; $j++) {
    	    if ($graph[$i][$j]) {
    		  $edges[$i . ',' . $j] = $graph[$i][$j];
    	    }
    	}
    }

    //sáp xếp độ dài các cạnh theo thứ tự tăng dần
    asort($edges);
    
    foreach ($edges as $k => $w) {
        //lấy số của 2 đỉnh
	   list($i, $j) = explode(',', $k);

    	$iSet = findSet($set, $i);
    	$jSet = findSet($set, $j);


        //nếu 2 đỉnh cùng 1 set => đã có 1 đường đi ngắn hơn nối 2 đỉnh => bỏ qua
        //nếu 2 đỉnh khác set => ghép 2 set lại với nhau
    	if ($iSet != $jSet) {
    	    $tree[] = ["from" => $i, "to" => $j, "cost" => $graph[$i][$j]];
    	    unionSet($set, $iSet, $jSet);
    	}
    }

    return $tree;
}

//tìm set của đỉnh đang xét
function findSet(array &$set, int $index) {
    foreach ($set as $k => $v) {
    	if (in_array($index, $v)) {
    	    return $k;
    	}
    }
    return false;
}

//gộp 2 set lại với nhau
function unionSet(array &$set, int $i, int $j) {
    $a = $set[$i];
    $b = $set[$j];
    unset($set[$i], $set[$j]);
    $set[] = array_merge($a, $b);
}
$graph = [
    [0, 3, 1, 6, 0, 0],
    [3, 0, 5, 0, 3, 0],
    [1, 5, 0, 5, 6, 4],
    [6, 0, 5, 0, 0, 2],
    [0, 3, 6, 0, 0, 6],
    [0, 0, 4, 2, 6, 0]
];
$mst = kruskal($graph);
$minimumCost = 0;
foreach($mst as $v) {
    echo "From {$v['from']} to {$v['to']} cost is {$v['cost']} \n";
    $minimumCost += $v['cost'];
}
echo "Minimum cost: $minimumCost \n";
