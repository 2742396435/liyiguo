<?php 
	$array = [2,4,3,6,3,2,5,5];
	$arr = FindNumsAppearOnce($array);
	print_r($arr);
	function FindNumsAppearOnce($array){
		$arr = array_count_values($array);
		asort($arr);
		$keys = array_keys($arr);
		return [$keys[0],$keys[1]];
		//echo($arr);
	}



 ?>