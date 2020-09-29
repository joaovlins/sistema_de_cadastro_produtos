<?php
include('conexao.php');


$id=$_GET['codigo'];

$selecionar=("SELECT * FROM produtos WHERE id='$id'");

$exe=$mysqli->query($selecionar);


?>

<?php while($dados=$exe->fetch_array()){ ?>
<link href="styles.css" rel="stylesheet">
<h4>Atualize o produto</h4>
<form action="alterar.php" method="POST">
            <input id="chave" name="id" type="label" value="<?php echo $dados["id"];?>" class="editar">
            <label class="editar">Nome</label>
            <input name="nomeProduto" type="label" value="<?php echo $dados["nome"];?>" class="editar">
            <label class="editar">Código</label>
            <input name="codigoProduto" type="label" value="<?php echo $dados["codigo"];?>" class="editar">
            <label class="editar">quantidade</label>
            <input name="quantidadeProduto" type="label" value="<?php echo $dados["quantidade"];?>" class="editar">
            <label class="editar">Valor</label>
            <input name="valorproduto" type="label" value="<?php echo $dados["valor"];?>" class="editar">
            <label class="editar">Descrição</label>
            <input name="DescricaoProduto" type="label" value="<?php echo $dados["descricao"];?>" class="editar">
            <input id="cadastrar" type="submit" value="Atualizar" class="editar">
    </form>

<?php }  ?>    
