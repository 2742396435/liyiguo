<?php 
nm(100,1300);
function nm($n,$m)
{
	$aa = $n,$m;
	echo substr_count(join($aa), '1')-1;
}




 ?>