<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CodersTrust | Class 2 | Task 3</title>
	<style>
		body{
			background: #e6e7e8;
		}
		.main_container {
    width: 1000px;
    margin: auto;
    margin-top: 50px;
}
*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;;
}
footer, .section_title > h2 {
    background: #999;
    color: #fff;
    text-align: center;
    padding: 5px;
    font-family: monospace;
 }

.section_title h2 {
    font-size: 28px;
}

footer h3 {
    font-size: 17px;
    font-weight: normal;
}
.section_title {
    height: 350px;
}
.matter_section {
    width: 100%;
    height: 450px;
    background: #fff;
    padding: 10px;
}
.matter_section h2 {
    font-size: 1.5em;
    color: #333;
    background: none;
    text-align: left;
    padding-bottom: 10px;
}
span.even {
    text-transform: uppercase;
    color: red;
}span.odd {
    text-transform: uppercase;
    color: green;
}

	</style>

</head>
<body>
	<div class="main_container">
		<div class="section_title">
			<h2> CodersTrust | Class 2 | Task 3 </h2>
				<div class="matter_section">

					<div class="task">
						<h2> Homework: take 3 names , find the shortest name , if the name's length is odd, print the name+ you are different, if even print name + you are general. </h2>
					</div>

					<?php
						$name_list = array(
									's a faroque',
									'kamal ahmed',
									'rana'
								);
					?>

					<?php
						foreach ( $name_list as $name ) {
							$character = strlen(str_replace(' ', '', $name));
							if ( $character % 2 == 0 ) {
								echo '<b>' .$name . '</b> has ' . $character . ' characters. Thats why <b>' . $name . ' </b> you are even and general.' . '<br>';
							} else {
								echo '<b>' . $name . ' </b> has ' .$character . ' characters. Thats why <b>' . $name . ' </b> you are odd and different.' . '<br>';
							}
						}

					?>

				</div>
			<footer>
				<h3> developed by: S.A Faroque </h3>
			</footer>
		</div>
	</div>
</body>
</html>