
<?php
 include('proteção.php');

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="voluntario.css">
    <title>Galeria🖼️</title>
</head>
<body>
<a class="navbar-brand" href="projeto.php">Página Principal <a href="https://www.ocean-alive.org/doar" target="_blank">Doações🐬<a href="logout.php">Logout 👨🏾‍💻</a>
    <h1>Mostrem-nos as vossas experiências das suas experiências</h1>
    <form   method="POST" enctype="multipart/form-data">
        <label for="imagem">Escolha a imagem:</label>
        <input type="file" name="imagem" id="imagem"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
require_once 'teste.php';

$p = new Voluntário("Voluntario","localhost","root","");
?>