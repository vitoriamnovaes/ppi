<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Tabuada <h1>
        <form action="" method="get">
        <label for="numero">Numero</label>
        <input type="text" name=" numero">
        <input type="submit">
        </form>
<?php

    if(isset ($_GET ['numero'])){
        for ($i=0;$i<=10;$i++){ ?>
            <p> <?php echo $i ?> </p>
        

    <?php
        }
</body>
</html>