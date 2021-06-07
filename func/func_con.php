<?php
function ConectarBanco($servidor,$usuario,$senha){
$conn = mysqli_connect($servidor,$usuario,$senha);
return $conn;
}
?>