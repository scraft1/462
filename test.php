<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>

<h1>Sign up</h1>



</body>

</html>

<?php
ini_set('display_errors', 'On');
$clientId = '5GUASCKIKMZYPUWKLPGN4ILQ3HFYP4PEH01M0LP14UCZDSL0';
$host = 'localhost';
$code = 'NH4NVY0MQXF2PNFLOMMN2W0VLEVMTPN1UJAAHLH2AL4J5SNZ';

$myfile = fopen("../secret.txt", "r") or die("Unable to open file!");
$secret = fread($myfile,filesize("../secret.txt")+1);
fclose($myfile);
$secret = rtrim($secret);

$real= 'GSHQTUMQDHALMSELVGUJ2YVPSEAQI5FABGFPCKWQ5VVOAP1P';

if($real != $secret){
	echo "bad<br>";
}
echo "secret: ".$secret."<br>";
echo "realaa: ".$real."<br>";

//$secret = 'GSHQTUMQDHALMSELVGUJ2YVPSEAQI5FABGFPCKWQ5VVOAP1P';

$url = 'https://foursquare.com/oauth2/access_token?client_id='.$clientId
	.'&client_secret='.$secret.'&grant_type=authorization_code&redirect_uri=http://'.$host.'&code='.$code;

// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);

// grab URL and pass it to the browser
$data = curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);

$obj = json_decode($data);
echo "URL:".$url.":<br>";
echo "Result:".$data.":<br>";

?>