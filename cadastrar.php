<?php

    if($_POST['submit']){
        print_r($_POST);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="cadastrar.php" method="post">
        <input type="text" name="username" required>
        <input type="email" name="email" required>
        <input type="password" name="senha" required>
        <input type="submit" name="" value="Cadastrar">
    </form>
</body>
</html>