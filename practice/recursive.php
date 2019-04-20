<?php
/*	function recursive($n){
			if ( $n === 0) {
				return 1;
			} else{
				return $n * recursive( $n - 1 );
			}
	}

	echo recursive(3);*/


	//Take a number and print it reversely till 0.
	echo 'Take a number and print it reversely till 0 <br><br>';

	for ($i=10; $i >=0; $i--) { 
		echo $i . '<br>';
	}

?>
	<br>
	<br>
	<br>
	<br>

<?php
	//Find even numbers between 1 to 20

	echo 'Find even numbers between 1 to 20 <br><br>';

	for ( $i=1; $i <= 20 ; $i++ ) { 
		if( $i % 2 == 0 ){
			echo $i . ' is even number <br>';
		}
	}


	echo "Find even numbers between 1 to 20 <br>";	

	$n = 1;
	while ( $n <= 20) {
		if( $n % 2 == 0){
			echo $n . ' is even number <br>';
		}
		$n++;
	}


	//Multiplication Table of 22 and 40

	echo 'Multiplication Table of 22 and 40 <br>';

	for ($i=1; $i <=10; $i++) { 
			echo 22 * $i . '<br>'; 
	}


	for ($i=10; $i <=20 ; $i++) { 
		for ($j=1; $j <=10 ; $j++) { 
			echo $i.'x'.$j. '='. $i * $j . '<br>';
		}
	}



//recursion 12 to 25;

	function sumrec( $n ){

		if ( $n === 12 ) {
			return 1;
		} else {
			return $n + sumrec( $n-1 );
		}
	}
	echo sumrec(25).'<br>';


	//-Make two functions that sum and subtract two numbers and print it.

	function sumresult($a, $b){
		return $a+$b;
	}

	echo sumresult(2, 5) . '<br>';

	function subtract ($x, $y){
		return $x-$y;
	}

	echo subtract(10, 5);
?>