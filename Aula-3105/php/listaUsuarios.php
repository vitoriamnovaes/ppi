<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include_once "db.php";
$getUsuarios = recuperaALL();
?>
<table id="minhalista">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Cidade</th>
        <th>Editar</th>
        <th>Excluir</th>
</tr>
<?php foreach($getUsuarios as $usuario){?>
    <tr>
        <td><?php echo $usuario['login'] ?></td>
        <td><?php echo $usuario['senha'] ?></td>
        <td><?php echo $usuario['cidade'] ?></td>
        <td><a href="editaUsuario.php?id=<?php echo $usuario['id'] ?>">Editar</a></td>
        <td><a href="deletaUsuario.php?id=<?php echo $usuario['id'] ?>">Excluir</a></td>
<?php } ?>
</table>
</body>
</html>