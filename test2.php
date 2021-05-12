<?php 
$array = [
    0, 100, -4, 8, 143, 5, 99, 100
];
 
$max_1 = null;
$max_2 = null;

for ($i = 0; $i < count($array); $i++)
{
    if ($max_1 == null){
        $max_1 = $array[$i];
    }
    else {
        if ($array[$i] > $max_1){
            $max_1 = $array[$i];
            
        } else if($max_2 < $array[$i]){
            $max_2 = $array[$i];
        }     
    }
}

$s = $max_1 + $max_2;
echo $s;

?>