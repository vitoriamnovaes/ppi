<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body,form{
            display: flex;
            justify
        }
        </style>
</head>
<?php
function calcula_imc($peso, $altura){
    $imc = $peso / ($altura * $altura);
    return $imc;
}

if (!isset($_GET['peso'])|| !isset($_GET['altura'])){

    header('Location: index.php');
}

?>
<body>
    <div>
        <p id="resultado"><?php echo calcula_imc($_GET['peso'],$_GET['altura']) ?></p>
</div>
<form action="resultado.php" method="post"></form>
<label for="nome">Nome</label>
<input type="text" name="nome" placeholder="Nome">
<label for="nome">Email</label>
<input type="text" name="email" placeholder="email">
<input type="submit" value="Enviar">
<input type="text" name="peso" value=<?php echo $_GET['peso']?>>
</body>
</html>