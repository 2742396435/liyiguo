<?php 
	echo add();
	function add()
	{
		$sum = 10;
		$er = decbin($sum);
		echo substr_count($er, 1);
	}


 ?>