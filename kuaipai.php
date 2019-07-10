<?php
$arr = [25,3,6,7,1,9];

function kuai($arr){
    if(count($arr)<=1){
        return $arr;
    }
    $base = $arr[0];
    $min = [];
    $max = [];
    for($i=1;$i<count($arr);$i++){
        if($arr[$i]<=$base){
        $min[] = $arr[$i];
    }else{
        $max[] = $arr[$i];
    }
    }
    $left = kuai($min);
    $right = kuai($max);
    return array_merge($left,[$base],$right);
}
echo "<pre>";
print_r(kuai($arr));
?>