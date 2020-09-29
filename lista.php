<?php

include("conexao.php");



$consulta = ("SELECT * FROM produtos");

$con = $mysqli->query($consulta);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<div id="return">
<a href="index.html" >CLIQUE AQUI PARA VOLTAR A PÁGINA ANTERIOR</a>
</div>


    <table id="lista">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Código</td>
            <td>Quantidade</td>
            <td>Preço</td>
            <td>Descrição</td>
            <td>Ação</td>
            
        </tr>
        
        <?php while($dados=$con->fetch_array()){ ?>
        
        <tr>
            <td><?php echo $dados["id"];?></td>
            <td><?php echo $dados["nome"];?></td>
            <td><?php echo $dados["codigo"];?></td>
            <td><?php echo $dados["quantidade"];?></td>
            <td><?php echo $dados["valor"];?></td>
            <td><?php echo $dados["descricao"];?></td>

            <td> <a href="javascript: if(confirm('tem certeza que deseja deletar o <?php echo $dados["nome"];?> ?'))location.href='deletar.php?codigo=<?php echo $dados["id"];?>';">Excluir</a> | <a href="javascript: if(confirm('tem certeza que deseja editar o  <?php echo $dados["nome"];?> ?'))location.href='editar.php?codigo=<?php echo $dados["id"];?>';">Editar</a></td>
            
        </tr>
        
        <?php }  ?>
   
        </div>

    </table>