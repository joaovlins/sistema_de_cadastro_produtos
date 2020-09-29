<?php

include('conexao.php');

$idp=$_POST['id'];
$nome=$_POST['nomeProduto'];
$codigo=$_POST['codigoProduto'];
$quantidade=$_POST['quantidadeProduto'];
$valor=$_POST['valorproduto'];
$descricao=$_POST['DescricaoProduto'];


if (null!== $nome and $codigo and $quantidade and $valor){

 $cadas = ("UPDATE produtos set nome='$nome', codigo='$codigo', quantidade='$quantidade', valor='$valor', descricao='$descricao' WHERE id='$idp';");
 
 $update=$mysqli->query($cadas);

 echo "<script>window.location='lista.php'</script>";

}else{

    echo "<script>window.location='editar.php';alert('PREENCHA TODO OS CAMPOS!');</script>";
    
}


?>
