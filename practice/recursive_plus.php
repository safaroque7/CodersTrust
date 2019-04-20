<?php
// sum of 1 to 10 number

	function recursiveSum($n){
		if($n===2){
			return 2;
		} else{
			return $n + recursiveSum($n-2);
		}
	}

	echo recursiveSum(5);
?>