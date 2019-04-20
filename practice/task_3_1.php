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
			box-sizing: border-box;
			font-weight: normal;;
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
		.task_result > h2 {
		    font-size: 18px;
		    line-height: 150%;
		    font-family: cursive;
		    border-bottom: 1px solid #666;
		    padding-bottom: 10px;
		}
		.task > h2 {
		    color: #f00;
		    font-size: 21px;
		    padding-bottom: 37px;
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
					
					<div class="task_result">
						
							<?php
								$name_list = [
										'md. kamal ahmed',
										'saimon ali',
										'suma',
										's a faroque',
										'md rana',
								];

								//shortest name print
								$lengths = array_map('strlen', $name_list);	
								$minLength = min($lengths);
								$array_index = array_search($minLength, $lengths);

								echo '<h2>' . $name_list[$array_index] . ' is the shortest name <br> </h2>';


								//odd or even check	
								foreach ($name_list as $name) {
											$reslut = strlen(str_replace(' ', '', $name));
									if( $reslut % 2 == 1 ) {
										echo '<h2>' . $name . ', you are different.' . '<br> </h2>' ;
									} else{
										echo '<h2>' . $name . ', you are general.' . '<br> </h2>';
									}						
								}
							?>
					</div>
					

				</div>
			<footer>
				<h3> developed by: S.A Faroque </h3>
			</footer>
		</div>
	</div>
</body>
</html>