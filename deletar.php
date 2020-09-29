<?php

include('conexao.php');

$code=$_GET['codigo'];

$dele=("DELETE FROM produtos WHERE id='$code' ");

$exe=$mysqli->query($dele);

echo "<script>window.location='lista.php'</script>";

?>