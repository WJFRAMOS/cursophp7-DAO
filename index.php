<?php

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);
//******************************** */


// Carrega somente um usuário
// $root = new Usuario();

// $root->loadById(3);

// echo $root;
//*********************** */

//Carrega lista de usuários

//$lista = Usuario::getList();

//echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login

// $lista = Usuario::search("O");
// echo json_encode($lista);

// Carega um usuário usando login e senha

$usuario = new Usuario();
$usuario -> login("wagner","0789");

echo $usuario;



?>