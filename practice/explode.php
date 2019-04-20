<!DOCTYPE html>
<html>
<head>
	<title> class 2 </title>
</head>
<body>

	<?php
		$name = 'md rupam haider';		
		// explode
		$name_explode = explode(' ', $name);
		echo $name_explode[0] . ' ' . $name_explode[1] . ' ' . $name_explode[2];



		echo '<br/>';



		$city = array('Dhaka', 'is', 'the', 'capital', 'of', 'bangladesh');
		// implode
		$city_implode = implode(' ', $city);

		echo $city_implode;
	?>

</body>
</html>

