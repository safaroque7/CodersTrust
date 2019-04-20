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
					<?php
						$name1	= "Dr. abdul awal minto"; 
						$name2 	= "A R khan";
						$name3	= "Shams Shahriar Suny";


						// for $name1	
						$name1letter = str_replace(' ', '', $name1);
						$name1letterfound = strlen($name1letter);

						if ($name1letterfound % 2 == 0) {
							?>
							<div class="result_title">
								<h2> <span class="even"> <?php echo $name1;?> </span> you are general;  </h2>
							</div>

							<?php } { ?>
								<h2> <span class="odd"> <?php echo $name1;?> </span> you are different;  </h2>
							<?php } ?>


							<?php

							//for $name2
							$name2letter = str_replace(' ', '', $name2);
							$name2letterfound = strlen($name2letter);

							if ($name2letterfound % 2 == 0) {
									?>
										<div class="result_title">
											<h2> <span class="even"> <?php echo $name2;?> </span> you are general; </h2>
										</div>
									<?php } else { ?>		
										<h2> <span class="odd"> <?php echo $name2;?> </span> you are different;  </h2>
								<?php } ?>
							

							<?php
								// for $name3
								$name3letter = str_replace(' ', '', $name3);
								$name3letterfound = strlen($name3letter);

								if($name3letterfound % 2 == 0){ ?>
									<div class="result_title">
										<h2> <span class="even"> <?php echo $name3;?> </span> you are general; </h2>
									</div>
									<?php } else { ?>		
										<h2> <span class="odd"> <?php echo $name3;?> </span> you are different;  </h2>
								<?php } ?>

								<h2>
								<?php
									//for shortest name search
									if($name1letterfound < $name2letterfound && $name1letterfound < $name3letterfound){
										echo $name1 . ' is shortest name.';
									} elseif ($name2letterfound < $name1letterfound && $name2letterfound < $name3letterfound) {
										echo $name2 . ' is shortest name.';
									}else{
										echo $name3 . ' is shortest name.';
									}

								?>
							</h2>	
								
				</div>
			<footer>
				<h3> developed by: S.A Faroque </h3>
			</footer>
		</div>
	</div>
</body>
</html>