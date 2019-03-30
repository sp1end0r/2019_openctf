<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

	<style type="text/css">

	h1, h2, h3, h4, p{
		font-size: 200%;
		color : white;
	}

	.msg {
		position: absolute;
		left : 520px;
		top : 500px;
	}
	</style>
</head>

<body>
<div class="container">

	<div style='text-align:center'>
		<h1>Codegate Open CTF</h1>
	</div>
	<br><br>

	<div id="login">

		<form action="./index.php" method="get">

			<p><span class="fontawesome-user"></span><input type="text" placeholder="id" name='id' ></p>
			<p><input type="submit" value="pwn"></p>

		</form>

	</div>

</div>


<div class='msg' style='text-align: center'>

<?php
    error_reporting(0);

    $id = preg_replace("/admin/i", "", $_GET['id']);
    $id = preg_replace("/admi/i", "", $id);

    if(isset($_GET['id'])) echo "<h3>Hello ".htmlspecialchars($id)."</h3>";

    if($id === "admin") echo "<br><h3>CONG!! flag{2b98b58389bcf3b17948833bf738ed02}</h3>";
    echo "<br>";
#    show_source(__FILE__);

?>
</div>

</body>
</html>
