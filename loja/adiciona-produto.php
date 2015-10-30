
<?php require_once ("class/produto.php");
require_once("cabecalho.php"); 		
require_once("banco-produto.php"); 
require_once("logica-usuario.php");

verificaUsuario();

$produto = new Produto();

$produtos->nome = $_POST['nome'];
$produtos->preco = $_POST['preco'];
$produtos->descricao = $_POST['descricao'];
$produtos->categoria_id = $_POST['categoria_id'];
if(array_key_exists('usado', $_POST)) {
	$usado = "true";
} else {
	$usado = "false";
}

if(insereProduto($conexao, $produto)) { ?>
	<p class="text-success">O produto <?= $nome ?>, <?= $preco ?> foi adicionado.</p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $nome ?> não foi adicionado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>			
