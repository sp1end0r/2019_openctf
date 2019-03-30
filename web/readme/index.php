<?php
	$flag = 'flag{i_want_chicken_and_coke}';
?>
<html>
	<head>
		<title>chicken world!</title>
	</head>
	<body>
		<center>
		<?php
			for($i=1; $i<5; $i++){
				echo '<a href="./buy.php?id='.$i.'"><img src="./image.php?file='.$i.'.jpg" alt="adm1nkyj_hi" width="500" heigth="500"></a><br/>';
			}
		?>
		</center>
	</body>
</html>