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
<div class="w3-sidebar w3-teal w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item"><b style="color:Black">CONECTADO -</b> <?= $_SESSION['banco'] ?></h3>
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
  
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-brown">
  <h1>Tabelas</h1>
</div>

<div class="w3-container">
<p>
<?php

if ($AlterarBanco) {
	
$sql = "SHOW TABLES";
$result = mysqli_query($AlterarBanco, $sql);
$tables = "Tables_in_".$banco;
  while($row = mysqli_fetch_assoc($result)) {
    echo "<hr> <br><b><h2>TABELA:</b> " . $row[$tables] . " </h2> <hr>";

$sql = "SHOW COLUMNS FROM ".$row[$tables];
$result_columns = mysqli_query($AlterarBanco, $sql);
  while($row = mysqli_fetch_assoc($result_columns)) {
  
    echo "
     
     <div class='w3-container'>
  <table class='w3-table-all w3-hoverable'>
    <thead>
      <tr class='w3-light-grey'>
        <th style='width:20%' >COLUNA</th>
        <th style='width:20%' >TIPO</th>
        <th style='width:20%' >NULL</th>
        <th style='width:20%' >CHAVE</th>
        <th style='width:20%' >PADRAO</th>
      </tr>
    </thead>
    <tr>
      <td style='width:20%'>{$row['Field']}</td>
      <td style='width:20%'>{$row['Type']}</td>
      <td style='width:20%'>{$row['Null']}</td>
      <td style='width:20%'>{$row['Key']}</td>
      <td style='width:20%'>{$row['Default']}</td>
    </tr>
   
  </table>
</div>



    ";



  }


  }


}else{
	echo "<b>Guro:</b> Banco não foi conectado por algum motivo";
}


?>
</p>
</div>

</div>
      

<script>
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace("w3-black", "w3-red");
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace("w3-red", "w3-black");
  }
}
</script>

</body>
</html>







