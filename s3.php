<html>
	<head>
	</head>
	<body>
		<?php
			$n=20;
			$i = [0,1];
			
			for($a=2; $a<$n; $a++){
				$i[] = $i[$a-1] + $i[$a-2];
							
			}
			
			echo implode(", ", $i);


		?>
	</body>
</html>