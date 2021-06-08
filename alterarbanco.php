<?php 
session_start();
require ("./func/func_con.php");

$banco = $_GET['banco'];
$_SESSION['banco'] = $banco;

$AlterarBanco = AlterarBanco($_SESSION['servidor'], $_SESSION['usuario'], $_SESSION['senha'],$_SESSION['banco']);
?>
<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item"><b style="color:green">CONECTADO -</b> <?= $_SESSION['banco'] ?></h3>
  <a href="dashboard.php" class="w3-bar-item w3-button">Dashboard</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-teal">
  <h1>Tabelas</h1>
</div>

<div class="w3-container">
<p>
<?php

if ($AlterarBanco) {
	
$sql = "SHOW TABLES";
$result = mysqli_query($AlterarBanco, $sql);

  while($row = mysqli_fetch_assoc($result)) {
  	$tables = "Tables_in_".$banco;
    echo "<b>Tabela:</b> <br>" . $row[$tables] . " <br><br>";

  }


}else{
	echo "<b>Guro:</b> Banco não foi conectado por algum motivo";
}


?>
</p>
</div>

</div>
      
</body>
</html>







