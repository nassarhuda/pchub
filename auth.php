<?php
$username =  $_POST["email"];
$password =  $_POST["password"];


// check with parse server: 
$curl = curl_init();
$query = urlencode('where={"username":$username}');
curl_setopt($curl, CURLOPT_URL, "https://api.parse.com/1/classes/PCHubUsers");
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('X-Parse-Application-Id: shJkoKSjpEjWIwSMughPfImXUha9ximjm2hqrRUj', 'X-Parse-REST-API-Key: I4mTrk4lpSsCDqtsjfhlbnsbzjeqM0Sywoo4PHrV','Content-Type: application/json'));

// where={\"username\":\"bnery@gmail.com\
$response = json_decode(curl_exec($curl));
//var_dump($response);
curl_close($curl);

$pass = $response->results[0]->password;

if($pass === $password){
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	header('refresh:0; url=main.php');
	exit();
}
else{
header('refresh:0; url=error.php');
exit();
}


?>