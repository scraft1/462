<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>

<body>

<h1>Welcome!</h1>
<h4 id="current"></h4>
<script type="text/javascript" src="js/logic.js"></script>
<button onclick="logout()">Logout</button>

<!-- change host name as needed -->
<?php 
include 'php/logic.php';
echo "<input type='button' value='Signup' onclick='window.location.href=\"https://foursquare.com/oauth2/authenticate?client_id=5GUASCKIKMZYPUWKLPGN4ILQ3HFYP4PEH01M0LP14UCZDSL0&response_type=code&redirect_uri=http://".$host."/signup.php\";'>";
?>

<br><br>
Name: <input id="name" type="text">
<button onclick="login()">Login</button>

<h2>Users</h2>

<ul id='list'><?php 
ini_set('display_errors', 'On');
createList();
?></ul>

<script>
	function login(){
		localStorage.setItem("current", document.getElementById('name').value);
		location.reload();
	}

	history.pushState('', document.title, window.location.pathname);
</script>

</body>

</html>
