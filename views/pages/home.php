
<?php



if (isset($_POST['acao'])) {
	$email = $_POST['email'];
	$pergunta = $_POST['pergunta'];
	$token = md5(uniqid());
	$sql = \mySql::conectar()->prepare("INSERT INTO chamados VALUES (null,?,?,?)");
	$sql->execute(array($email,$pergunta,$token));
		echo "<script>alert ('seu chamado foi feit com sucesso ,  voce receberá uma enficada no su oi');</script>";
}

?>




<form method="post">

<h2>ABRIR CHAMADO </h2>
<input type="email" name="email">
<textarea name="pergunta"></textarea>

<input type="submit" name="acao" value="enviar">


</form>