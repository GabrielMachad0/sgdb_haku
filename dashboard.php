<?php
include("./func/func_con.php");
session_start();

if(isset($_POST['servidor'])){
$servidor = $_POST['servidor'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$_SESSION['servidor'] = $servidor;
$_SESSION['usuario']  = $usuario;
$_SESSION['senha']    = $senha;
}else{

$_SESSION['servidor'];
$_SESSION['usuario'];
$_SESSION['senha'];
$_SESSION['banco'];
}





$conn2 = ConectarBanco($_SESSION['servidor'], $_SESSION['usuario'], $_SESSION['senha']);
?>





<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-teal w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item ">Menu</h3>
  <a href="dashboard.php" class="w3-bar-item w3-button">Dashboard</a>
  <a href="scriptsql.php" class="w3-bar-item w3-button">Script SQL</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>

  <div class="w3-card-4" style="position: absolute; bottom: 0; width: 100%;">
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

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-brown">
  <h1>Bancos disponiveis:</h1>
</div>


<div class="w3-container">

<p>
<?php
$sql = "SHOW DATABASES";
$result = mysqli_query($conn2, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo $row['Database'] . " <br>";
    echo "<a href='alterarbanco.php?banco=".$row['Database']."'> Conectar </a><br>";
  }
} else {
  echo "0 results";
}
?>	
</p>

</div>

</div>
      
</body>
</html>