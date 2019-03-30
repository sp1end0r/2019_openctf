<?php
	if(!$_COOKIE['id']){
		setcookie('id', 'guest', time()+3600);
		$_COOKIE['id'] = 'guest';
	}
?>
<html>
	<title>login as admin</title>
	<body>
		<center>
			<img src="image/cookie.jpg" height="30%" width="50%"><br/><br/>
			<?php
				echo 'Hello ' . $_COOKIE['id'];
				if($_COOKIE['id'] === 'admin'){
					echo '<br/>flag{cookie_cookie_cookie_cookie_cookie_boom!}';
				}
			?>
		</center>
		<!--
			do you like a cookie?
		-->
	</body>
</html>