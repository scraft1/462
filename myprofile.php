<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>

<h1>My Profile Page!</h1>
<h4 id="current"></h4>
<a href='index.php'>Home</a>

<br><br>

<?php
	include 'php/logic.php';
	ini_set('display_errors', 'On');

	getPrivate($_GET['user']);
?>

<script type="text/javascript" src="js/logic.js"></script>

</body>
</html>
