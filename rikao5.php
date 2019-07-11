<?php 
	$arr = [1,2,3,4,5,6,7,8,9,10];
	$ji = $ou = [];
	foreach ($arr as $k => $v) {
		if ($v%2==1) {
			$ji[] = $v;
		}
		else{
			$ou[] = $v;
		}
	}
	var_dump(array_merge($ji,$ou));

 ?>