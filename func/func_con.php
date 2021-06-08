<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
</html>
<?php

function ConectarBanco($servidor,$usuario,$senha){
$conn = mysqli_connect($servidor,$usuario,$senha);
return $conn;
}


function AlterarBanco($servidor,$usuario,$senha,$banco){
$condatabase = mysqli_connect($servidor,$usuario,$senha,$banco);
return $condatabase;
}

?>