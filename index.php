<?php 

	require_once("config.php");

/*

	//Carrega um usuario
	$root = new Usuario();
	$root->loadById(3);
	echo $root;

	//Carrega uma lista de usuario
	$lista = Usuario::getList();
	echo json_encode($lista);

	



	$sql = new Sql();
	$usuarios = $sql->select("SELECT * FROM tb_usuarios");


	echo json_encode($usuarios);


	//Carrega um lista de usuarios buscando pelo login
	$search = Usuario::search("b");
	echo json_encode($search);


	//Carrega um usuario usando o login e a senha
	$usuario = new Usuario();
	$usuario->login("root","123456");
	echo $usuario;


	//Criando um novo usario
	$aluno = new Usuario("tiago", "ti09232");
	$aluno->insert();
	echo $aluno;

*/

	$usuario = new Usuario();

	$usuario->loadById(8);

	$usuario->update("professor", "!@#$%&");
	
 ?>