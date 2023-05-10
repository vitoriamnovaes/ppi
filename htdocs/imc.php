<?php
    if(!(isset($_GET["peso"]) && isset($_GET["altura"])))
    {
        echo "<script> alert('Querido usuário, favor informar seu peso e altura!');
       
        window.location.href='/';
        </script>";
       /* header("Location:/")*/
        exit();

    }else{

    

$a=$_GET["peso"];
$b=$_GET["altura"];

function imc($peso, $altura){
    return $peso/($altura*$altura);
}
echo "O imc é ".imc($a,$b);
    }
?>