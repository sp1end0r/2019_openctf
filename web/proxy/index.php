<?php
	if(!$_GET['url'])
		header('Location: ?url=http://naver.com');
?>
<html>
	<title>adm1nkyj proxy</title>
	<!--
		admin page : admin.php
	-->
	<body>
		<center>
			<?php
				echo file_get_contents($_GET['url']);
			?>
		</center>
	</body>
</html>