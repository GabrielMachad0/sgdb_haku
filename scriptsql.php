<?php 
session_start();
require ("./func/func_con.php");

$AlterarBanco = AlterarBanco($_SESSION['servidor'], $_SESSION['usuario'], $_SESSION['senha'],$_SESSION['banco']);


if( isset($_GET['sql']) ){
$script = $_GET['sql'];
$rodar_script = mysqli_query($AlterarBanco, $script);
}

?>
<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-teal w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item"><b style="color:Black">CONECTADO</b></h3>
  <a href="dashboard.php" class="w3-bar-item w3-button">Dashboard</a>
  <a href="scriptsql.php" class="w3-bar-item w3-button">Script SQL</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-brown">
  <h1>Banco conectado: <?= $_SESSION['banco'] ?></h1>
</div>

<div class="w3-card-4">
  <div class="w3-container w3-brown">
    <h2>CODIGO SQL</h2>
  </div>
  <form class="w3-container" >
    <p>      
    <label class="w3-text-brown"><b></b></label>
    <textarea class="w3-input w3-border w3-sand" name="sql"></textarea>
    <p>      
   
    <button class="w3-btn w3-brown">Rodar</button></p>
  </form>
</div>




</div>
      
</body>
</html>







