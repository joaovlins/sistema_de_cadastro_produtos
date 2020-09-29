<?php

include('conexao.php');

$nome=$_POST['nomeProduto'];
$codigo=$_POST['codigoProduto'];
$quantidade=$_POST['quantidadeProduto'];
$valor=$_POST['valorproduto'];
$descricao=$_POST['DescricaoProduto'];


if (null!== $nome and $codigo and $quantidade and $valor){

 $cadas = ("INSERT INTO produtos VALUES (null ,'$nome', '$codigo', '$quantidade', '$valor', '$descricao');");
 
 $incluir=$mysqli->query($cadas);

 echo "<script>window.location='index.html'</script>";

}else{

    echo "<script>window.location='index.html';alert('PREENCHA TODO OS CAMPOS!');</script>";
    
}


?>
