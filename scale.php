<?php
$weights = array_map('intval', explode(",",$argv[3]));
foreach ($weights as $weight){
    $totalSum = $totalSum + $weight;
}

rsort($weights);
$diff = abs($argv[1] - $argv[2]);

if ($totalSum > $diff){
    echo "niet in balans";
    exit;
}

while ($diff != 0){
    foreach($weights as $weight){
        if ($weight <= $diff){
                $usedWeight[] = $weight;
                $diff -= $weight; 
                break;
            }
    }
}

var_dump($usedWeight);

?>