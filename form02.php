<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP & MySQL</title>
	<link href="sections.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include "top.html" ?>
<?php include "left.html" ?>
<div id="content">
	<form action="read.php" method="POST">
		Име:<input type="text" id="firstName" name="name">
		Фамилия: <input type="text" name="skills"><br><br>
		<input type="submit" value="Search">
	</form>
</div>
</body>
</html>