<?php
include("./func/func_con.php");
session_start();


$servidor = $_POST['servidor'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$_SESSION['servidor'] = $servidor;
$_SESSION['usuario']  = $usuario;
$_SESSION['senha']    = $senha;


$conn2 = ConectarBanco($_SESSION['servidor'], $_SESSION['usuario'], $_SESSION['senha']);



$sql = "SHOW DATABASE";
$result = mysqli_query($conn2, $sql);
