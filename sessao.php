<?php
session_start();
$servidor = $_POST['servidor'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$_SESSION['servidor'] = $servidor;
$_SESSION['usuario']  = $usuario;
$_SESSION['senha']    = $senha;


header("Location: dashboard.php");