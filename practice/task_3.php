<!DOCTYPE html>
<html>
<head>
	<title>task3</title>
</head>
<body>
	<?php
		$name1 = 'md afjal hossain';
		$name2 = 'mirja alam rahman';
		$name3 = 'mr munna';

		$name1_explode = explode(' ', $name1);
		$name2_explode = explode(' ', $name2);
		$name3_explode = explode(' ', $name3);

		$name1_explode_count = strlen('$name1_explode');
		$name2_explode_count = strlen('$name2_explode');
		$name3_explode_count = strlen('$name3_explode');


		if($name1_explode_count%2 == 0){
			echo 'you are exceptional';
		}elseif ($name2_explode_count%2 == 0) {
			echo "you are exceptional";
		}elseif ($name3_explode_count%2 == 0) {
			echo "you are exceptional";
		} else{
			echo 'you are general';
		}

	?>
</body>
</html>