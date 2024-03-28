<?php

require_once("config.php");

// CARREGA UM USUÁRIO PELO ID

//$admin = new Usuario();
//$admin->loadById(1);
//echo $admin;

// CARREGA UMA LISTA DE USUÁRIOS

//$list = Usuario::getList();
//echo json_encode($list);



// CARREGA UMA LISTA DE USUÁRIOS BUSCANDO PELO LOGIN

//$search = Usuario::search("jo");
//echo json_encode($search);



// CONFIRMA O LOGIN A PARTIR DO LOGIN E SENHA

//$usuario = new Usuario();
//$usuario->confirmaLogin("brunohouse","123456");
//echo ($usuario);




// INSERINDO UM NOVO USUARIO

//$aluno = new Usuario("pedro pupo","eahuehaueah");
//$aluno->insert();
//echo $aluno;


// ATUALIZANDO UM USUARIO DO BANCO DE DADOS

//$usuario = new Usuario();
//$usuario->loadById(12);
//echo $usuario;


// DELETA UM USUARIO APARTIR DO ID


$usuario = new Usuario();

$usuario->loadById(9);
$usuario->delete();
echo $usuario;
