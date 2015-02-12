<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<script type="text/javascript">
	var user = getParameterByName('user');

	if(user === localStorage.getItem('current')){
		window.location.replace('myprofile.php?user='+user);
	}
</script>

<body>

<h1>Welcome to <?php echo $_GET['user'];?>'s Profile Page!</h1>
<h4 id="current"></h4>
<a href='index.php'>Home</a>

<br><br>
<script type="text/javascript" src="js/logic.js"></script>
<?php
	include 'php/logic.php';
	ini_set('display_errors', 'On');

	getPublic($_GET['user']);
?>

</body>

</html>
