<?php 
	function number($n)
	{
		if ($n>=3) {
			return number($n-1)+number($n-2);
		}
		elseif($n==1)
		{
			return 1;
		}
		elseif($n==2)
		{
			return 2;
		}
	}
	echo number($n=11);
 ?>