<?php 
echo Sum_Solution(100);
function Sum_Solution($n){
    $sum =0;
    for($i=$n;$i>=1;$i--){
        $sum+= $i;
    }
    return $sum;
}

 ?>