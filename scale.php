<?php
$weights = array_map('intval', explode(",",$argv[3]));
$totalSum;

rsort($weights);
$diff = abs($argv[1] - $argv[2]);
while ($diff != 0){
    foreach($weights as $weight){
        if ($weight <= $diff){
                $usedWeight[] += $weight;
                $diff -= $weight; 
                break;
            }
    }
}

$i = 1;
foreach($usedWeight as $weight){
    if (count($usedWeight) === $i){
        echo $weight;
    } else{
        echo $weight . ", ";
    }
    $i++;
}

?>