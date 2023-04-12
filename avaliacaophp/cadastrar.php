<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via GET</title>
</head>
<body>
    <form action="arquivos.php" method="post">
        <label for="titlo">Titlo:</label>
        <input type="text" id="titlo" name="titlo"><br><br>
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor"><br><br>
        <label for="data">Data de saida:</label>
        <input type="date" id="data" name="data"><br><br>
        <input type="submit" value="Cadastrar">
        
    <p>
         <a href="menu.php" class="btn btn-danger">Retornar</a>
     </p>
    </form>
</body>
</html>

?>